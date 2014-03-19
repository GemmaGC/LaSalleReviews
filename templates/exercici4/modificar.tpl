

{$modules.head}

    <form name="edit-form" class="modify_form" action="" method="post">

        <div class="header_modifica">
            <h1 class="">Modifica el nom o la URL de la imatge</h1>
        </div>

        <div class="content_modify">
            <input name="newImgName" type="text" class="input imgName" placeholder="Nou nom de la imatge.." required/>
            <input name="newImgURL" type="text" class="input imgURL" placeholder="Nova URL de la imatge.." required/>
        </div>

        <div class="footer_form">
            <input type="submit" name="submit_canvis" value="Enviar" class="button_modify" />
        </div>

    </form>


{$modules.footer}