// タブレットの時はPC版縮小表示
let ua = navigator.userAgent;
if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
    jQuery('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
} else {
    jQuery('head').prepend('<meta name="viewport" content="width=1440">');
}

// ループスライダー
jQuery(function () {
    jQuery('.loopslider__images').clone().appendTo('.loopslider__wrapper');
});

// ヘッダースクロール時固定
jQuery(function() {
    let _window = jQuery(window),
    _header = jQuery(".header"),
    headerBottom;

    _window.on("scroll", function () {
    headerBottom = 60;
    if (_window.scrollTop() > headerBottom) {
        _header.addClass("-fixed");
    } else {
        if (!(jQuery("#trigger").hasClass("active"))) {
        _header.removeClass("-fixed");
        }
    }
    });

    // spメニューOPEN
    jQuery(".header__trigger").on('click', function() {
        if ((jQuery(this)).hasClass("-opened")) {
            jQuery(".header__hammenuWrapper").fadeOut(300);
            jQuery(".header").addClass('-opened');
        } else {
            jQuery(".header__hammenuWrapper").fadeIn(300);
            jQuery(".header__hammenuWrapper").css('display', 'flex');
        }
        if (!(jQuery(".header").hasClass("-opened"))) {
            jQuery(".header").addClass('-opened');
        } else {
            jQuery(".header").removeClass('-opened');
        }
        if (_window.scrollTop() < 60 && !(jQuery(".header__trigger").hasClass("-opened"))) {
            jQuery(".header").removeClass("-fixed");
        }
        jQuery(this).toggleClass('-opened')
    });
})