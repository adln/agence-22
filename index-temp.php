<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <meta name="description" content="Agence Digitale Twenty Two a votre service">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/style/style.css">


</head>

<body>

    <nav>
        <div class="nav-wrapper indigo">
            <a href="#" class="brand-logo raleway">Agence 22.</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#home" class="goto-link">Home</a></li>
                <li><a href="#web" class="goto-link">Web</a></li>
                <li><a href="#mobile" class="goto-link">Mobile</a></li>
                <li><a href="#software" class="goto-link">Logiciels</a></li>
            </ul>

        </div>
    </nav>

    <div class="row mb-0 indigo center-align full-height-first valign-wrapper section scrollspy" id="home">
        <div class="col l12 s12">
            <img src="assets/img/logo.png" alt="Logo Agence Twenty Two" class="responsive-img">
            <h5 class="white-text">L'agence qui concrétise vos projets.</h5>
            <a class="btn-floating btn-large waves-effect waves-light red mt-5 goto-link" href="#web"><i class="material-icons">keyboard_arrow_down</i></a>
        </div>
    </div>
    <div class="row full-height indigo darken-2 mb-0 valign-wrapper white-text section scrollspy" id="web">
        <div class="col  s12 l7">
            <h1>Développement Web</h1>
            <p class="flow-text">
                La developpement web utilisant les derniéres technologies est notre domaine d'éxpértise. allant du simple <b>Sites Web vitrine</b> au <b>Sites Web Complexes</b> et <b>Applications Web</b> plus évolués.
            </p>
            <p class="center-align">
                <a class="btn-floating btn-large waves-effect waves-light red goto-link" href="#mobile"><i class="material-icons">keyboard_arrow_down</i></a>
            </p>
        </div>
        <div class="col s12 l5">
            <img data-src="assets/img/websites.webp" alt="Développement WEB" class="responsive-img">
        </div>
    </div>
    <div class="row full-height indigo darken-4 mb-0 valign-wrapper white-text section " id="mobile">

        <div class="col s5">
            <img data-src="assets/img/iphonex.webp" alt="Développement Mobile" class="responsive-img">
        </div>
        <div class="col s7">
            <h1>Développement Mobile</h1>
            <p class="flow-text">
                La developpement web utilisant les derniéres technologies est notre domaine d'éxpértise. allant du simple <b>Sites Web vitrine</b> au <b>Sites Web Complexes</b> et <b>Applications Web</b> plus évolués.
            </p>
            <p class="center-align">
                <a class="btn-floating btn-large waves-effect waves-light red goto-link" href="#software"><i class="material-icons">keyboard_arrow_down</i></a>
            </p>
        </div>
    </div>

    <div class="row full-height indigo darken-3 mb-0 valign-wrapper white-text section " id="software">

        <div class="col s7">
            <h1>Logiciels</h1>
            <p class="flow-text">
                La developpement web utilisant les derniéres technologies est notre domaine d'éxpértise. allant du simple <b>Sites Web vitrine</b> au <b>Sites Web Complexes</b> et <b>Applications Web</b> plus évolués.
            </p>
            <p class="center-align">
                <a class="btn-floating btn-large waves-effect waves-light red goto-link" href="#contact"><i class="material-icons">keyboard_arrow_down</i></a>
            </p>
        </div>

        <div class="col s5">
            <img data-src="assets/img/software.webp" alt="Développement Logiciels" class="responsive-img">
        </div>
    </div>

    <div class="row full-height deep-orange darken-3 mb-0 valign-wrapper white-text section " id="contact">
        <div class="col m10 offset-m1 s12">
            <h2 class="center-align">Contact Form</h2>
            <div class="row">
                <form class="col m8 offset-m2 s12">
                    <div class="row">
                        <div class="input-field col s12 ">
                            <input id="name" type="text">
                            <label for="name" class="white-text">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="form-input">
                            <label for="email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message" class="white-text">Message</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m12">
                            <p class="right-align"><button class="btn btn-large waves-effect waves-light" type="button" name="action">Send Message</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script>
        (function($) {
            let $NAV = $('nav'),
                $ALL_LINKS = $('.goto-link'),
                $All_SECTIONS = $('.section'),
                $HTML = $('html, body'),
                $WINDOW = $(window);

            // initialisation
            $HTML.animate({
                    scrollTop: 0
                },
                0
            );


            // initialize scrollspy
            $ALL_LINKS.click(function(e) {
                e.preventDefault();
                let $element = $(this);
                let id = $element.attr('href');
                let elementTop = id == '#home' ? 0 : $(id).offset().top;

                $HTML.animate({
                        scrollTop: elementTop
                    },
                    500
                );
            });
            // make navigation fixed

            $WINDOW.on('scroll', function(e) {
                let $position = $HTML.scrollTop();

                if ($position > 0 && !$NAV.parent().is('.navbar-fixed')) {
                    $NAV.wrap('<div class="navbar-fixed"></div>');
                }
                if ($position == 0 && $NAV.parent().is('.navbar-fixed')) {
                    $NAV.unwrap();
                }

                // add class to navigation
                $All_SECTIONS.each(function() {
                    let $this = $(this),
                        elem_start = $this.position().top,
                        elem_end = elem_start + $this.innerHeight(),
                        middle_screen = $(window).height() / 2 + $position;

                    if (elem_start <= middle_screen && elem_end >= middle_screen) {
                        let isSelected = '#' + $this.attr('id'),
                            $selected = $('.goto-link[href="' + isSelected + '"]'),
                            $parent = $selected.parent();

                        if (!$parent.is('.active') && isSelected !== '#home') {
                            $ALL_LINKS.each(function() {
                                $(this)
                                    .parent()
                                    .removeClass('active');
                            });
                            $parent.addClass('active');

                            // lazy load image
                            let images = $this.find('img');
                            images.each(function() {
                                let $current = $(this);
                                if (!$current.attr('src')) {
                                    $current.attr('src', $current.data('src'));
                                }
                            });

                        }
                        if (isSelected == '#home') {
                            $ALL_LINKS.each(function() {
                                $(this)
                                    .parent()
                                    .removeClass('active');
                            });
                        }
                    }
                });
            });
        })($);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Material+Icons', 'Raleway:500']
            }
        });
    </script>
</body>

</html>