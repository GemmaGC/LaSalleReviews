
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>{$benv}</title>

        <link rel="stylesheet" type="text/css" href="{$url.global}/css/style.css" />

    </head>

    <body>

    <div class="main_header">
        <header>
            <div class="site-logo">{$titol}</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p>{$benv}</p>
        </div>

        <br/>
        <p id = "info">{$exp}</p>

            <div class="container_buttons">
               <a class="next" href={$micos}>Començar</a>
               <a class="prev" href={$enr}>Enrere</a>
            </div>


        <div class="clear"></div>

{$modules.footer}