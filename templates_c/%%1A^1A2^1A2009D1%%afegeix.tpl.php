<?php /* Smarty version 2.6.14, created on 2014-03-05 18:47:16
         compiled from exercici2/afegeix.tpl */ ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>PROJECTES WEB</title>

    <link rel="stylesheet" type="text/css" href="/css/stylebbdd.css" />

</head>

<body>

<div class="main_header">
    <header>
        <div class="site-logo">EXERCICI 2</div>
    </header>
</div>

<div id="wrapper">


    <div id = "success">
        <p>HOLA QUE TAL ndskbvakrdbfhjasbv dkacbf vd</p>
    </div>


    <form class="form-all">
        <fieldset>
            <legend>Introdueix les dades:</legend>

            <label for="nom">Email</label>
            <input id="nom" type="text" placeholder="Nom de la imatge..." required>

            <label for="url">Password</label>
            <input id="url" type="url" placeholder="http://yourweb.dom" required>

            <button type="submit" class="EnviaInfo">Envia</button>


        </fieldset>
    </form>



    <div class="clear"></div>
</div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>