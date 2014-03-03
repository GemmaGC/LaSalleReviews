<?php /* Smarty version 2.6.14, created on 2014-03-03 16:12:42
         compiled from exercici2/home.tpl */ ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $this->_tpl_vars['benv']; ?>
</title>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/style.css" />

    </head>

    <body>

    <div class="main_header">
        <header>
            <div class="site-logo"><?php echo $this->_tpl_vars['titol']; ?>
</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p><?php echo $this->_tpl_vars['benv']; ?>
</p>
        </div>

        <form>
            <fieldset>
                <div>
                    <label>Nom Imatge</label>
                    <input type="text" name="name" required>
                </div>

                <div>
                    <label>Direcció Web Imatge</label>
                    <input type="url" name="url" placeholder="http://yourweb.dom" required>
                </div>

                <div>
                    <label>Your Message</label>
                    <textarea></textarea>
                </div>

                <button type="submit">Send Message</button>

            </fieldset>

        </form>

        <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>