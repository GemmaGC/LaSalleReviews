<?php /* Smarty version 2.6.14, created on 2014-02-26 16:37:34
         compiled from exercici1/micos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'exercici1/micos.tpl', 38, false),)), $this); ?>

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
                <figure class="container_buttons">
                    <img class="img" src="imag/exercici1/<?php echo $this->_tpl_vars['info']; ?>
.jpg">
                </figure>
                <div class="container_buttons">

                    <a class="prev" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/">Anterior</a>


                    <a class="next" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/">Següent</a>

<!--                    <input type="hidden" value="<?php echo smarty_function_math(array('equation' => 'x - y','x' => $this->_tpl_vars['img'],'y' => 1), $this);?>
" name="valor" id="valor"><a>Anterior</a></input>


                    <input type="hidden" value="<?php echo smarty_function_math(array('equation' => 'x + y','x' => $this->_tpl_vars['img'],'y' => 1), $this);?>
" name="valor" id="valor">Següent</input>
-->
                </div>
            </section>

        </div>
        <footer>
            <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
        </footer>

        </body>

    </html>