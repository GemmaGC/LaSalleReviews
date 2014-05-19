

<!-- Despres només amb un section i amb bucle es fan la resta -->




    <div class="Last10Images">

        <h1>LAST 10 IMAGES</h1>
        {foreach from = $reviews item = r}
            {*<img class="section_last_img" src="{$r.image}">*}

            <img class="section_last_img" src="imag/img_usuaris/{$r.image}">
        {/foreach}
        <!--<img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">
        <img class="section_last_img" src="imag/foto1.jpg">-->


    </div>