{$modules.head}

        <form name="insert-form1" class="insert-form" action="" method="post">

            <div class="header_afegeix">
                <h1 class="bbdd">AFEGIR IMATGE A LA BASE DE DADES</h1>
                <span>Introdueix el nom i l'URL de la imatge.</span>
            </div>

            <div class="content_afegeix">
                <input name="imgName" type="text" class="input imgName" placeholder="Nom de la imatge.." required/>
                <input name="imgURL" type="text" class="input imgURL" placeholder="URL de la imatge.." required/>
            </div>

            <div class="footer-form">
                <input type="submit" name="submit" value="Enviar" class="button" />

            </div>

        </form>

    </div>

    <div class="gradient"></div>
{$modules.footer}