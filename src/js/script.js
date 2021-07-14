// mobile menu
$('.hum').on('click', function () {
    $('.menu').slideToggle();
    $(this).toggleClass('in');
});


/* cookie message */
if (document.cookie.indexOf('cookieMessage') === -1) {
    $('.cookie-message').addClass('view');
}
$('.cookie-close').on('click', function () {
    document.cookie = "cookieMessage=true";
    $('.cookie-message').removeClass('view');
});


// Если нужно при скролле менять внешний вид шапки сайта:
// fixed menu 
function resizeMenu(h_hght, pad1, pad2) {
    let nav = $('.header .top-nav');
    let top = $(this).scrollTop();
    if (top > h_hght) {
        nav.css('padding', pad2 + 'px 0');
    }
    $(window).scroll(function () {
        top = $(this).scrollTop();
        if (top < h_hght) {
            nav.css('padding', pad1 + 'px 0');
        } else {
            nav.css('padding', pad2 + 'px 0');
        }
    });
};
$(window).on('load resize', function () {
    if ($(window).width() >= '750') {
        resizeMenu(50, 40, 20);
    } else {
        resizeMenu(50, 16, 16);
    }
});
// ------------------------------------------------------


// Если на сайте есть SVG анимации:
// animations
const currentPageAnimations = [
    {elementId: 'anim-1', path: 'anim-man.json'}, // в обьекте указываем - 1) id по которому будем вызывать анимацию 2) путь к json файлу анимации
    {elementId: 'anim-2', path: 'anim-woman.json'},
];
// Функции для инициализации и вызова анимаций (менять ничего не нужно):
currentPageAnimations.forEach(function(item) {
    initLottie({
        element: document.getElementById(item.elementId),
        path: item.path
    });
});
function initLottie(options) {
    return lottie.loadAnimation({
        container: options.element,
        path: options.path,
        renderer: 'svg', 
        loop: true, 
        autoplay: true
    })
}
// ------------------------------------------------------