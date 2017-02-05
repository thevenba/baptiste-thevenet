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
        <link rel="stylesheet" href="css/styles.css"/>
        <link rel="stylesheet" href="css/projects.css"/>
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Della+Respira" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/requestAnimationFrame.js"></script>
        <script src="https://use.fontawesome.com/ed61d7741c.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <ul id="scene" >
                <li class="layer" data-depth="0.00"><div class="bg" style="background-image: url(img/background1/back1.jpg);"></div></li>
                <li class="layer" data-depth="0.20"><div class="bg" style="background-image: url(img/background1/back2.png);"></div></li>
                <li class="layer" data-depth="0.50"><div class="bg" style="background-image: url(img/background1/back3.png);"></div></li>
                <li class="layer" data-depth="0.55"><div class="bg" style="background-image: url(img/background1/back4.png);"></div></li>
                <li class="layer" data-depth="0.80"><div class="bg" style="background-image: url(img/background1/back5.png);"></div></li>
                <li class="layer" data-depth="-0.60"><div class="bg" style="background-image: url(img/background1/baptiste.png);"></div></li>
                <li class="layer" data-depth="0.40"><div class="bg" style="background-image: url(img/background1/thevenet.png);"></div></li>
                <li class="layer" data-depth="0.30"><div class="bg" style="background-image: url(img/background1/webdesigner.png);"></div></li>
                <li class="layer" data-depth="-0.20"><div class="bg" style="background-image: url(img/background1/developpeur-web.png);"></div></li>
            </ul>
        </div>
        <div id="sky" class="bg" style="background-image: url(img/background2/sky.jpg)">
            <div id="sun" class="bg" style="background-image: url(img/background2/sun2.png)">
                <div id="back" class="bg" style="background-image: url(img/background2/back.png)">
                    <div id="front" class="bg" style="background-image: url(img/background2/front.png)">
                        <div id="particles" class="bg" style="background-image: url(img/background2/particles.png)">
                            <div id="refugePlanAiguille" class="project">
                                <img src="img/refuge-plan-aiguille.jpg"/>
                                <div class="overlay">
                                    <div>
                                        <h2>Refuge du Plan de l'aiguille</h2>
                                        <p>2016 <span style="color: #b25968">&#9899;</span> Site Web</p>
                                        <div class="project-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lastSection" class="row">
            <div id="about" class="col half">
                <div>
                    <h2>À propos de moi</h2>
                    <p>
                        Mon nom est Baptiste Thevenet, je suis Webdesigner et 
                        développeur Web. Actuellement en licence professionelle 
                        Webdesign à l'Institut Universitaire de Mulhouse, je 
                        possède déjà un diplôme universitaire de technologie en 
                        Informatique. Ces deux cursus me permettent ainsi d'être
                        très polyvalent dans le domaine du Web.
                    </p>
                    <div class="about-links">
                        <a href='http://www.viadeo.com/p/002ygoymlm75p9b'><i class="fa fa-viadeo fa-2x fa-fw"></i></a>
                        <a href='mailto:hello@baptistethevenet.com'><i class="fa fa-envelope fa-2x fa-fw"></i></a>
                    </div>
                </div>
            </div>
            <div id="contact" class="col half">
                <div>
                    <h2>Contactez moi</h2>
                    <form>
                        <div class="input-group">
                            <label>Nom*</label>
                            <div class="input">
                                <input type="text" name="name" required/>
                            </div>
                        </div>
                        <div class="input-group">
                            <label>Email*</label>
                            <div class="input">
                                <input type="email" name="email" required/>
                            </div>
                        </div>
                        <div class="input-group">
                            <label>Message*</label>
                            <div class="input">
                                <textarea name="message" required></textarea>
                            </div>
                        </div>
                        <div class="input-group">
                            <button type="submit" name="submit"><span><i class="fa fa-long-arrow-right"></i>Envoyer</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(document).scrollTop() < $("#sky").offset().top + $('#sky').offset().top / 2) {
                    $("#about > div").addClass("hidden");
                    $("#contact > div").addClass("hidden");
                } else {
                    $("#about > div").removeClass("hidden");
                    $("#contact > div").removeClass("hidden");
                }
            });


            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);

            $('#sky').parallax("center", 0.1, true);
            $('#back').parallax("center", 0.3, true);
            $('#front').parallax("center", 0.5, true);
            $('#sun').parallax("center", -0.1, true);
            $('#particles').parallax("center", -0.5, true);

            $('.project').each(function () {
                $(this).click(function () {
                    var id = $(this).attr("id");
//                    $('#' + id).css("width", "100%").css("margin", "0");
//                    $('#' + id + ' .overlay').css("width", "100%");
                    $('#' + id).animate({width: "100%"}).animate({margin: "0"});
                    $('#' + id + ' .overlay').css("width", "100%").css("backgroundColor", "rgba(255,255,255,1)");
                    $('#' + id + ' .overlay > div').delay(1000).animate({top: "-10%"});
                    myFunction(id);

                });
            });

            function myFunction(id) {
                setTimeout(openProject, 1500);

                function openProject() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
//                            $('#' + id + ' .project-content').html(this.responseText);
                            $('body').html(this.responseText);
                        }
                    };
                    xhttp.open("GET", "./projects/" + id + ".php", true);
                    xhttp.send();
                }
            }


        });

    </script>
</html>
