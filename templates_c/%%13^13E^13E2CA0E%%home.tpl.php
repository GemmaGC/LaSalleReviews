<?php /* Smarty version 2.6.14, created on 2014-03-24 19:02:43
         compiled from home/home.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>


	<!-- Això és un comentari HTML -->
		<div id = "success">
		<p>BENVINGUT A LA HOME DEL GRUP 1!</p>
	</div>

	<p id="components">Grup format per: CLAUDIA DAUDÉN, YLENIA GÓMEZ-RAYA i GEMMA GUITERAS</p>

	<p id = "info">Selecciona l'exercici que vols visualitzar:</p>


	<nav>
		<ul>
			<li><a class="menu" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/exercici1">EXERCICI 1: MONOS</a></li>
			<li><a class="menu" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/exercici2">EXERCICI 2: MONOS + BBDD</a></li>
			<li><a class="menu" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/exercici3">EXERCICI 3: ZOO</a></li>
			<li><a class="menu" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/exercici4">EXERCICI 4: EDITAR BASE DE DADES DEL ZOO</a></li>
		</ul>
	</nav>

    <div class="botoBBDD">
        <a href="/bd/monosdb.sql" download>
            <img border="0" src="/bd/button.png" alt="baseDades">
        </a>
    </div>

	
<div class="clear"></div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>