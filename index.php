
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Your IP address</title>
        <style>
            /* reset */
            html, body, h1, div, span { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; }
            body { font: 13px/1.231 sans-serif; *font-size: small; }
            /* own code mobile first */
            html { overflow-y: scroll; text-align: center; }
            body { font-family: Consolas, 'Liberation Mono', Courier, monospace; }
            h1 { font-size: 3em; margin-top: 20px; }
            h1.ipv6 { font-size: 1em; }
            .clr { float: none; width: 100%; height: 1px; clear: both; }
            #badge { display: none; }
            @media (min-width: 500px) {
                h1.ipv6 { font-size: 1em; }
            }
            @media (min-width: 700px) {
                h1 { font-size: 6em; margin-top: 15%; }
                h1.ipv6 { font-size: 2em; }
                #badge { display: block; position: absolute; top: 0; right: 0; }
            }
            @media (min-width: 1200px) {
                h1.ipv6 { font-size: 4em; }
            }
        </style>
    </head>
    <body>

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KX55DS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KX55DS');</script>
        <!-- End Google Tag Manager -->

        <?php $ip = $_SERVER['REMOTE_ADDR']; ?>

        <div class="wrapper">
            <h1<?php if ( strlen($ip) > 16 ) echo " class='ipv6'"; ?>><?=$ip?></h1>
            <div class="clr"></div>
        </div>

        <div id="badge">
            <a href="https://github.com/vojtasvoboda/ip-address">
                <img src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
            </a>
        </div>

    </body>
</html>
