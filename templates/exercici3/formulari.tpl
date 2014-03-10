


    <form name="insert-form" class="insert-form" action="" method="post">

        <div class="header_afegeix">
            <h1 class="bbdd">AFEGIR IMATGE {$animal} A LA BASE DE DADES</h1>
            <span>Introdueix el nom i l'URL de la imatge.</span>
        </div>

        <div class="content_afegeix">
            <input name="imgName" type="text" class="input imgName" placeholder="Nom de la imatge.." required/>
            <input name="imgURL" type="text" class="input imgURL" placeholder="URL de la imatge.." required/>
        </div>

        <div class="footer-form">
            <input type="submit" name="submit_{$animal}" value="Enviar" class="button" />

        </div>

    </form>