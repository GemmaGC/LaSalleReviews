{$modules.headPractica}
        <div class="welcome_title">
            <h1>{$title}</h1>
        </div>

        <p class="welcome_info">{$subtitle}</p>

        <div class="welcome_buttons_container">
            <a href="{$url.global}/LaSalleReview" class="welcome_button">HOME</a>
            {if $log == 0 && $send == 1}
                <form method='post' action='../../controllers/practica/classesAuxiliars/mail.ctrl.php'><input type="submit" name="codi_activacio" class="welcome_button" value="RE-SEND" /></form>
            {elseif $log == 0}
                <a href="{$url.global}/logIn" class="welcome_button">LOG IN</a>
            {/if}
        </div>
{$modules.footerPractica}