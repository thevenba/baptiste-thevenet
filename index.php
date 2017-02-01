<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="script/parallax.js"></script>
        <script src="script/requestAnimationFrame.js"></script>
        <style>
            html, body, ul, li, img {
                margin: 0;
            }

            ul {
                list-style: none;
                display: block;
                padding: 0;
                margin: 0;
            }

            #wrapper {
                position: absolute;
                overflow: hidden;
                display: table;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
            }

            #scene {
                position: relative;
                overflow: hidden;
                display: block;
                height: 100%;
                width: 100%;
                padding: 0;
                margin: 0;
            }

            .layer {
                height: 100%;
                width: 100%;
                padding: 0;
                margin: 0;
            }

            .layer > div {
                height: 100%;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <ul id="scene" >
                <li class="layer" data-depth="0.00"><div style="background-image: url(img/back1.jpg);"></div></li>
                <li class="layer" data-depth="0.40"><div style="background-image: url(img/back2.png);"></div></li>
                <li class="layer" data-depth="0.80"><div style="background-image: url(img/back3.png);"></div></li>
                <li class="layer" data-depth="0.60"><div style="background-image: url(img/back4.png);"></div></li>
                <li class="layer" data-depth="1.00"><div style="background-image: url(img/back5.png);"></div></li>
                <li class="layer" data-depth="0.60"><div style="background-image: url(img/baptiste.png);"></div></li>
                <li class="layer" data-depth="0.40"><div style="background-image: url(img/thevenet.png);"></div></li>
                <li class="layer" data-depth="0.30"><div style="background-image: url(img/webdesigner.png);"></div></li>
                <li class="layer" data-depth="0.20"><div style="background-image: url(img/developpeur-web.png);"></div></li>
            </ul>
        </div>
    </body>
    <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
</html>
