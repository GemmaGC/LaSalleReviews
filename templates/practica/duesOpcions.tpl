{$modules.headPractica}
        <div class="welcome_title">
            <h1>{$title}</h1>
        </div>

        <p class="welcome_info">{$subtitle}</p>

        <div class="welcome_buttons_container">
            {if $esborrar}

                <a href="/deleteReview" class="welcome_button">YES</a>
                <a href="{$url.global}/myReviews" class="welcome_button">NO</a>
            {else}
                <a href="{$url.global}/LaSalleReview" class="welcome_button">HOME</a>
                {if $log == 0 && $send == 1}
        <!--CAL ARREGLAR EL RESEND DEL FORM AMB L'ACTION-->
                    <form method='post' action=''><input type="submit" name="codi_activacio" class="welcome_button arreglo_welcome_button" value="RE-SEND" /></form>
                {elseif $log == 0}
                    <a href="{$url.global}/logIn" class="welcome_button">LOG IN</a>
                {/if}
            {/if}
        </div>
{$modules.footerPractica}