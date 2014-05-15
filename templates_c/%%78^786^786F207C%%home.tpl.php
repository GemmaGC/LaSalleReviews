<?php /* Smarty version 2.6.14, created on 2014-05-15 11:36:56
         compiled from practica/home.tpl */ ?>


<?php echo $this->_tpl_vars['modules']['headPractica']; ?>




<!-- Falta per posar bé els noms dels mòduls -->
    <nav class="menu_lateral_fixe_home">
        <ul>
            <li>HOME SECTIONS >> &nbsp;&nbsp;&nbsp;</li>
            <li><a href="#bestRev">BEST REVIEW</a></li>
            <li class="sep">|</li>
            <li><a href="#llistes">LAST 10 REVIEWS & IMAGES</a></li>
            <li class="sep">|</li>
            <li><a href="#twitterBlock"> TWITTER</a></li>
        </ul>
    </nav>

    <?php echo $this->_tpl_vars['modules']['bestReview']; ?>


    <section class="llistats" id="llistes">
        <?php echo $this->_tpl_vars['modules']['llistatReviews']; ?>

        <?php echo $this->_tpl_vars['modules']['llistatImatges']; ?>

    </section>

    <div class="separator"></div>

    <?php echo $this->_tpl_vars['modules']['twitter']; ?>




<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>