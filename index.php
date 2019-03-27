<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dexet & Delmas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <script type="text/javascript">
        // On initialise la latitude et la longitude de Paris (centre de la carte)
        var lat = 45.040840;
        var lon = -0.187033;
        var macarte = null;
        // Fonction d'initialisation de la carte
        function initMap() {
            // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
            macarte = L.map('map').setView([lat, lon], 16);
            // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);
            var marker = L.marker([45.040840, -0.187033]).addTo(macarte);
        }
        window.onload = function(){
            // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
            initMap();
        };
    </script>
</head>

<body id="body">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Content site -->

<header id="myHeader">
    <h1 id="brand">Dexet & Delmas</h1>
    <nav id="navbar">
        <ul>
            <li><a href="#apropos">à propos</a></li>
            <li><a href="#cours">cours</a></li>
            <li><a href="#galerie">galerie</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>

    </nav>
</header>

<div class="menuOne">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<section class="mid-all">
    <img src="./img/logoseul.png" alt="" class="logo">

    <div class="sub-header">
        <p>Aquitaine - Dordogne - Charente maritime - Paris</p>
    </div>

    <div class="intro">
        <h2 class="slogan">Réfection & Création</h2>

        <p>Nous faire confiance pour la réfection de vos sièges, pour la création de
            vos abat-jour, c'est adhérer à une démarche de qualité, un conseil
            personnalisé et un savoir-faire reconnu.<br>
            L'esprit de partage qui nous anime vous offre la possibilité de venir
            réaliser vous-même vos sièges et abat-jour.<br>
            Laissez-vous guider dans un univers de passion</p>
    </div>


    <div class="slider">
        <div class="single-item">
            <div style="background:url('./img/slider/Tapissier_decorateur_Photographe_corporate_d_entreprise-a-Bordeaux-en-Gironde-www-photographe-33-Christophe_B-_MG_9505.jpg') center center / cover;"></div>
            <div style="background:url('./img/slider/Tapissier_decorateur_Photographe_corporate_d_entreprise-a-Bordeaux-en-Gironde-www-photographe-33-Christophe_B-_MG_9599.jpg') center center / cover;"></div>
            <div style="background:url('./img/slider/Tapissier_decorateur_Photographe_corporate_d_entreprise-a-Bordeaux-en-Gironde-www-photographe-33-Christophe_B-_MG_9745.jpg') center center / cover;"></div>
            <div style="background:url('./img/slider/Tapissier_decorateur_Photographe_corporate_d_entreprise-a-Bordeaux-en-Gironde-www-photographe-33-Christophe_B-_MG_9786.jpg') center center / cover;"></div>
            <div style="background:url('./img/slider/Tapissier_decorateur_Photographe_corporate_d_entreprise-a-Bordeaux-en-Gironde-www-photographe-33-Christophe_B-_MG_9867.jpg') center center / cover;"></div>
        </div>
    </div>
    <!-- END SLIDER -->


    <!-- START A PROPOS -->
    <div class="container-box" id="apropos">

        <div class="side">

            <h2>À propos</h2>

            <img src="./img/a-prorpos.jpg" alt="">

        </div>

        <div class="side">
            <p>Situé au cœur du village de Guîtres sous le clocher de l’abbatiale,
                l’atelier-boutique Dexet & Delmas est né de l’expérience de couturière et de
                tapissière d’Aurélie Delmas, artisan d’art depuis 10 ans, et de Cédric Dexet tapissier,
                sculpteur sur pierre et maroquinier depuis plus de 15 ans.<br>
                Un savoir faire « made in France » entre tradition et modernité qu’ils font partager
                lors des cours à l’atelier dans un esprit convivial.<br>
                En couple dans le privé et à l’atelier, ils sont tous les deux plusieurs fois diplômés et
                ont une solide expérience de leurs domaines : artisan d’art, conseil, formation, vente et gestion
            </p>
        </div>

    </div>
    <!-- END A PROPOS -->
</section>
<!-- CLOSE MID ALL -->

<section class="ctn-courses">
    <div class="center-courses" id="cours">
        <div class="side">
            <img src="./img/siege.svg" alt="">
            <h3>Tapisserie<br>
                d’ameublement</h3>
            <p>Réfection de tous types d’assise,
                tête de lit, coussins, tissu tendu,
                paravents, etc…</p>
        </div>
        <div class="side">
            <img src="./img/lampe.svg" alt="">
            <h3>Abat-jour</h3>
            <p>Réfection et création
                de toutes formes.</p>
        </div>
        <div class="side">
            <img src="./img/pinceau.svg" alt="">
            <h3>Cours et Stages</h3>
            <p>Lundi et le jeudi | <span>2x par mois</span></p>
            <p>14h00 à 19h00</p>
            <p>Vendredi</p>
            <p>14h00 à 17h00</p>
            <p>Samedi</p>
            <p>9h30 à 12h30</p>
            <p>Stage à la demande.</p>
        </div>
    </div>
</section>


<section class="ctn-galery">

    <div class="top-title-ctn">
        <h2>galerie</h2>
        <p class="right-text">Dans cette galerie, vous retrouverez quelques unes de nos créations, sur demande de nos clients.<br>N'hésitez pas à nous contacter</p>
    </div>

    <div id="galerie">
        <div class="sub-galerie">
            <img src="img/galerie/photo-1.jpg" name="1" alt="photo galerie"/>
            <img src="img/galerie/photo-2.jpg" name="2" alt="photo galerie"/>
            <img src="img/galerie/photo-3.jpg" name="3" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-4.jpg" name="4" alt="photo galerie"/>
            <img src="img/galerie/photo-5.jpg" name="5" alt="photo galerie"/>
            <img src="img/galerie/photo-6.jpg" name="6" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-7.jpg" name="7" alt="photo galerie"/>
            <img src="img/galerie/photo-8.jpg" name="8" alt="photo galerie"/>
            <img src="img/galerie/photo-9.jpg" name="9" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-10.jpg" name="10" alt="photo galerie"/>
            <img src="img/galerie/photo-11.jpg" name="11" alt="photo galerie"/>
            <img src="img/galerie/photo-12.jpg" name="12" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-13.jpg" name="13" alt="photo galerie"/>
            <img src="img/galerie/photo-14.jpg" name="14" alt="photo galerie"/>
            <img src="img/galerie/photo-15.jpg" name="15" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-16.jpg" name="16" alt="photo galerie"/>
            <img src="img/galerie/photo-17.jpg" name="17" alt="photo galerie"/>
            <img src="img/galerie/photo-18.jpg" name="18" alt="photo galerie"/>
        </div>

        <div class="sub-galerie">
            <img src="img/galerie/photo-19.jpg" name="19" alt="photo galerie"/>
            <img src="img/galerie/photo-20.jpg" name="20" alt="photo galerie"/>
            <img src="img/galerie/photo-21.jpg" name="21" alt="photo galerie"/>
        </div>
    </div>

</section>

<section class="ctn-contact" id="contact">
    <div class="top-title-ctn">

        <h2>Contact</h2>

        <p class="info-p">N'hésitez pas à nous contacter,<br>pour toutes informations supplémentaires.</p>

        <div class="right-contact">
            <div class="personne">
                <p>Aurélie<br>06 62 72 56 73</p>
                <p>Cédric<br>06 70 88 24 98</p>
            </div>

            <a class="center-c a-c" href="mailto:contact@dexetdelmas.fr">contact@dexetdelmas.fr</a>
            <p class="center-c">22 rue Sainte Catherine, 33230 Guîtres</p>
        </div>

    </div>


    <div class="form">

        <form class="" action="index.php" method="post">
            <div class="side-f">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="">
            </div>

            <div class="side-f">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="">
            </div>

            <div class="side-f">
                <label for="message">Message</label>
                <input type="text" id="message" name="message">
            </div>

            <input class="sub" type="submit" name="" value="Envoyer">

        </form>

    </div>

</section>


<footer>

    <div class="center-footer">
        <div class="side">
            <div class="rs">
                <a href="https://www.facebook.com/dexetetdelmas/" target="_blank"><img src="./img/fb.png" alt=""></a>
                <a href="https://www.instagram.com/dexetdelmas/" target="_blank"><img src="./img/instagram.png" alt=""></a>

            </div>

            <p>06 62 72 56 73 - 06 70 88 24 98</p>

            <a class="center-c a-c" href="mailto:contact@dexetdelmas.fr">contact@dexetdelmas.fr</a>
            <p class="center-c">22 rue Sainte Catherine, 33230 Guîtres</p>

        </div>
        <div class="side">
            <img src="./img/logoentier.png" alt="">
        </div>
        <div id="map" class="side" style="">

        </div>

    </div>

</footer>



<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="slick/slick.min.js"></script>

<script type="text/javascript">
    const menuOne = document.querySelector('.menuOne');
    function addClassFunOne() {
        this.classList.toggle("clickMenuOne");
    }
    menuOne.addEventListener('click', addClassFunOne);



    $('.menuOne').click(function(){
        if($(this).hasClass('clickMenuOne')){
            $('header nav').fadeIn();
            $(this).addClass('clickMenuOne');
        }else{
            $('header nav').fadeOut();
            // $(this).addClass('clickMenuOne');

        }
    });

    window.onscroll = function() {myFunction()};

    // Get the header
    var header = document.getElementById("myHeader");
    var brand = document.getElementById("brand");
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            brand.classList.add("sticky-margin-left");
            navbar.classList.add("sticky-margin-right");
        } else {
            header.classList.remove("sticky");
            brand.classList.remove("sticky-margin-left");
            navbar.classList.remove("sticky-margin-right");
        }
    }

    $('#message').focus(function()
    {
        /*to make this flexible, I'm storing the current width in an attribute*/
        $(this).attr('data-default', $(this).height());
        $(this).animate({ height: 150 }, 'slow');
    }).blur(function()
    {
        /* lookup the original width */
        var h = $(this).attr('data-default');
        $(this).animate({ height: h }, 'slow');
    });

    function offsetAnchor() {
        if (location.hash.length !== 0) {
            window.scrollTo(window.scrollX, window.scrollY - 200);
        }
    }

    $(document).on('click', 'a[href^="#"]', function(event) {
        window.setTimeout(function() {
            offsetAnchor();
        }, 0);
    });

    window.setTimeout(offsetAnchor, 0);

    $('#galerie img').on('click', function (event) {
        var img = document.createElement('img');
        var div = document.createElement('div');
        document.getElementById('galerie').append(div);
        div.style.position = 'fixed';
        div.style.top = '0';
        div.style.left = '0';
        div.style.backgroundColor = 'black';
        div.style.opacity = '0.7';
        div.style.width = '100%';
        div.style.height = '100%';
        document.getElementById('galerie').append(img);
        img.src = "img/galerie/clique-" + event.target.getAttribute('name') + ".jpeg";
        img.style.position = 'fixed';
        img.style.left = '30%';
        img.style.top = '15%';
        img.style.width = '400px';
        img.style.height = 'auto';
        img.addEventListener('click', function (evt) {
            img.parentNode.removeChild(img);
            div.parentNode.removeChild(div);
        });
        div.addEventListener('click', function (evt) {
            div.parentNode.removeChild(div);
            img.parentNode.removeChild(img);
        });
    });

</script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
