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


// open modal
function omSetAnimateConfigOpen() {
    $("body").css("overflow", "hidden");
    $('.overlay').show();
    $('.dont-leave-modal').addClass('flex-add');
}

function omSetAnimateConfigClose() {
    $('.overlay').hide();
    $('.dont-leave-modal ').slideUp();
    $("body").css("overflow", "auto");
}

var mouseX = 0;
var mouseY = 0;
var popupCounter = 0;

document.addEventListener("mousemove", function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

$(document).mouseleave(function () {
    if (document.cookie.indexOf('omPopover') === -1) {
        if (mouseY < 100 && window.innerWidth > 750) {
            if (popupCounter < 1) {
                if (typeof omSetAnimateConfigOpen === 'function') {
                    omSetAnimateConfigOpen()
                } else {
                    console.warn('Missing function with settings')
                }
                ;
            }
            popupCounter++;
        }
    }
});

$(".close-modal, .overlay, .back-btn").click(function () {
    if (typeof omSetAnimateConfigClose === 'function') {
        omSetAnimateConfigClose()
    } else {
        console.warn('Missing function with settings')
    }
    ;
    document.cookie = "omPopover=true";
});
// ------------------------------------------------------