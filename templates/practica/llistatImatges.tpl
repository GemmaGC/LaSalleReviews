

    <div class="Last10Images">

        <h1>LAST 10 IMAGES</h1>
        {foreach from = $reviews item = r}
            <img class="section_last_img" src="imag/img_usuaris/{$r.image}">
        {/foreach}
    </div>