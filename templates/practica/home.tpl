

{$modules.headPractica}


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

    {$modules.bestReview}

    <section class="llistats" id="llistes">
        {$modules.llistatReviews}
        {$modules.llistatImatges}
    </section>

    <div class="separator"></div>

    {$modules.twitter}



{$modules.footerPractica}