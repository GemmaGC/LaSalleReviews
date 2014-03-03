{$modules.head}

	<!-- Això és un comentari HTML -->
	{* Això és un comentari en Smarty *}
	<div id = "success">
		<p>BENVINGUT A LA HOME DEL GRUP 1!</p> 
	</div>

	<p id="components">Grup format per: CLAUDIA DAUDÉN, YLENIA GÓMEZ-RAYA i GEMMA GUITERAS</p>
	<br/>
	<p id = "info">Selecciona l'exercici que vols visualitzar:</p>


	<nav>
		<ul>
			<li><a class="menu" href="{$url.global}/exercici1">EXERCICI 1: MONOS</a></li>
			<li><a class="menu" href="{$url.global}/exercici2">EXERCICI 2: MONOS + BBDD</a></li>
			<li><a class="menu" href="">EXERCICI 3: PRÒXIMAMENT</a></li>
			<li><a class="menu" href="">EXERCICI 4: PRÒXIMAMENT</a></li>
		</ul>
	</nav>

	
<div class="clear"></div>
{$modules.footer}