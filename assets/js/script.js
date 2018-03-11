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