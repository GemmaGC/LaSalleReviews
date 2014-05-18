<?php

require '../../src/facebook/facebook.php';

class PracticaFacebookController extends Controller
{
    protected $user_profile;
    protected $logoutUrl;
    protected $loginUrl;
    protected $name;

    public function build()
    {
        // Create our Application instance (replace this with your appId and secret).
        $facebook = new Facebook(array(
            'appId'  => '292309604263355',
            'secret' => '06d50faaafd96c3986a6a8e9d749cf3d',
        ));

        // Get User ID
        $user = $facebook->getUser();
        $this->assign('user', $user);

        // We may or may not have this data based on whether the user is logged in.
        //
        // If we have a $user id here, it means we know the user is logged into
        // Facebook, but we don't know if the access token is valid. An access
        // token is invalid if the user logged out of Facebook.

        if ($user) {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $this->user_profile = $facebook->api('/me');
                $this->assign('user_profile', $this->user_profile);
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }

        // Login or logout url will be needed depending on current user state.
        if ($user) {
            $this->logoutUrl = $facebook->getLogoutUrl();
            $this->assign('logoutUrl', $this->logoutUrl);
        } else {
            $this->loginUrl = $facebook->getLoginUrl();
            $this->assign('loginUrl', $this->loginUrl);
        }

        // This call will always work since we are fetching public data.
        $this->name = $facebook->api('/'.$this->name);
    }

}