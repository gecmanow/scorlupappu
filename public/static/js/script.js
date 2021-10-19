$('document').ready(function () {

    // remove bg of empty cells 
    $('.sizes table tr td').each(function () {
        if ($.trim($(this).text()) == '') {
            $(this).css('background', 'none');
        }
    });

    // hide video block, if video block is empty
    if ($.trim($('.video iframe').attr('src')) == '') {
        $('.video').css('display', 'none');
    } else {
        $('.video').css('display', 'block');
    }
    
     // smooth transition between the anchors
        $('a[href^="#"].anchor').click(function () {
            var link = $(this);
            if (link.attr('href') == '#') return;
            var target = link.attr('href');
            var target_top = $(target).offset().top;
            $('html, body').animate({
                scrollTop: target_top
            }, 700);
            return false;
        });

    // close the window after 3s waiting 
    $('a').click(function () {
        if ($(this).data('toggle') == 'modal')
            return;

        var modal = $(this).attr('href');
        var timer = setTimeout(function () {
            $('#modal-success').fadeOut();
        }, 3000);
        $(modal).fadeIn();
        timer;
        if (modal == '#show-image') {
            var url = $(this).find('img').attr('src');
            $('#show-image img').attr('src', url);
        }
        $('.close').click(function () {
            $('.modal').fadeOut();
            clearTimeout(timer);
        })
    });
    
    var advHeight = $('.advantages').height() - 75;
    $('.request-price').css('min-height', advHeight + 'px');

    $('.b-mobile-menu-toggle').click(function() {
        if($('header').hasClass('collapsed') == false) {
            $('header').css('height', '240px');
            $('header').addClass('collapsed');
        } else {
            $('header').css('height', '55px');
            $('header').removeClass('collapsed');
        }
    });
    
    if (window.matchMedia('(min-width: 768px)').matches) {
        var advHeight = $('.advantages').height() - 75;
        $('.request-price').css('min-height', advHeight + 'px');
    } else {
        $('.request-price').css('height', 'auto');
    }
    
    $(window).resize(function() {
        if($('header').hasClass('collapsed') == true) {
            $('header').css('height', '55px');
            $('header').removeClass('collapsed');
        }
        if (window.matchMedia('(min-width: 768px)').matches) {
            $('header').css('height', '80px');
            var advHeight = $('.advantages').height() - 75;
            $('.request-price').css('min-height', advHeight + 'px');
        }
        if (window.matchMedia('(max-width: 767px)').matches) {
            $('header').css('height', '55px');
            $('.request-price').css('height', 'auto');
        }
    });
    
    $('.mobile-menu li a').click(function() {
        $('header').css('height', '55px');
        $('header').removeClass('collapsed');
    });
});
