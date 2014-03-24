

{$modules.head}

    <form name="edit-form" class="modify_form" action="" method="post">

        <div class="header_modifica">
            <h1 class="">{$head}</h1>
        </div>

        <div class="content_modify">
            <input name="newImgName" type="text" class="input_modifica imgName" placeholder="{$nomImg}" required/>
            <input name="newImgURL" type="text" class="input_modifica imgURL" placeholder="{$urlImg}" required/>
        </div>

        <div class="footer_form">
            <input type="submit" name="submit_canvis" value="Enviar" class="button_modify" />
        </div>

    </form>


{$modules.footer}