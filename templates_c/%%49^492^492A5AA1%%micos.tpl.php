<?php /* Smarty version 2.6.14, created on 2014-03-05 19:03:36
         compiled from exercici1/micos.tpl */ ?>

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

                <div class="go_back_container">

                    <a class="prev" href="<?php echo $this->_tpl_vars['exercici']; ?>
">Enrere</a>

                </div>

                    <h1><?php echo $this->_tpl_vars['titol']; ?>
</h1>


                    <section>

                        <div class="clr"></div>

                        <img class="img" src="<?php echo $this->_tpl_vars['act_url']; ?>
">

                        <div class="container_buttons">

                            <?php if ($this->_tpl_vars['prev_img'] > $this->_tpl_vars['min']): ?>
                                <a class="prev" href="<?php echo $this->_tpl_vars['prev_url']; ?>
">Anterior</a>
                            <?php else: ?>
                                <a href=""></a>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['next_img'] < $this->_tpl_vars['max']): ?>
                                <a class="next" href="<?php echo $this->_tpl_vars['next_url']; ?>
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