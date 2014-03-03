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

{$modules.footer}