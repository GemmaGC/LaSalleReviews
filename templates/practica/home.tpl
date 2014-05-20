

{$modules.headPractica}

    <nav class="menu_lateral_fixe_home">
        <ul>
            <li>HOME SECTIONS >> &nbsp;&nbsp;&nbsp;</li>
            <li><a href="#Best_Review">BEST REVIEW</a></li>
            <li class="sep">|</li>
            <li><a href="#Reviews_Lists">LAST 10 REVIEWS & IMAGES</a></li>
            <li class="sep">|</li>
            <li><a href="#10_Best_Reviews">10 BEST RATED REVIEWS</a></li>
            <li class="sep">|</li>
            <li><a href="#Block_Twitter">TWITTER</a></li>
        </ul>
    </nav>

    <section id="Best_Review">
        {$modules.bestReview}
    </section>

    <section class="llistats" id="Reviews_Lists">
        {$modules.llistatReviews}
        {$modules.llistatImatges}
    </section>

    <div class="separator" id="10_Best_Reviews"></div>

    <section>
        {$modules.llistatBestReviewsPuntuacio}
    </section>

    <div class="separator" id="Block_Twitter"></div>

    {$modules.twitter}

{$modules.footerPractica}