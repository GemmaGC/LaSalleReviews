<?php /* Smarty version 2.6.14, created on 2014-02-26 19:03:09
         compiled from exercici1/micos.tpl */ ?>

    <!-- Això és un comentari HTML -->
        <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Fotografies dels micos</title>



            <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/stylemicos.css" />

        </head>

        <body>
        <div class="main_header">
            <header>
                <div class="site-logo">EXERCICI 1</div>
            </header>
        </div>
        <div id="container">


            <section>
                <div class="clr"></div>
                <!--<figure class="container_buttons">-->
                    <img class="img" id="img" src="<?php echo $this->_tpl_vars['url']['global']; ?>
/imag/exercici1/<?php echo $this->_tpl_vars['act_img']; ?>
.jpg">
                <!--</figure>-->
                <div class="container_buttons">

                    <?php if ($this->_tpl_vars['prev_img'] > 1): ?>
                        <a class="prev" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/<?php echo $this->_tpl_vars['prev_img']; ?>
">Anterior</a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['next_img'] < 10): ?>
                        <a class="next" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/<?php echo $this->_tpl_vars['next_img']; ?>
">Següent</a>
                    <?php endif; ?>
                </div>
            </section>

        </div>
        <footer>
            <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
        </footer>

        </body>

    </html>