<?php


require_once("facebook.php");
class PracticaHolaController extends Controller
{

    protected $view = 'practica/hola.tpl';


    public function build( )
    {

        /*$this->assign('a', '../facebook-php-sdk-master/src/a.gif');
        $config = array(
            'appId' => '292309604263355',
            'secret' => '06d50faaafd96c3986a6a8e9d749cf3d',
            'fileUpload' => false, // optional
            'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
        );

        $facebook = new Facebook($config);

        // Get User ID
        $user_id = $facebook->getUser();

        if($user_id) {

            // We have a user ID, so probably a logged in user.
            // If not, we'll get an exception, which we handle below.
            try {

                $user_profile = $facebook->api('/me','GET');
                echo "Name: " . $user_profile['name'];

            } catch(FacebookApiException $e) {
                // If the user is logged out, you can have a
                // user ID even though the access token is invalid.
                // In this case, we'll get an exception, so we'll
                // just ask the user to login again here.
                $login_url = $facebook->getLoginUrl();
                echo 'Please <a href="' . $login_url . '">login.</a>';
                error_log($e->getType());
                error_log($e->getMessage());
            }
        } else {

            // No user, print a link for the user to login
            $login_url = $facebook->getLoginUrl();
            echo 'Please <a href="' . $login_url . '">login.</a>';

        }*/

        $this->setLayout( $this->view );
    }


    public function loadModules() {

        $modules['headPractica']	    = 'SharedpracticaHeadController';
        $modules['footerPractica']	    = 'SharedpracticaFooterController';

        return $modules;
    }
}