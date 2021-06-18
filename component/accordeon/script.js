// accordeon
export function accordion() {
    if ($('.accordion')) {
        $('.accordion .ac-body:first').slideToggle(500);
        $('.accordion .ac-head:first').toggleClass('in');
        $('.ac-head').click(function () {
            $(this).toggleClass('in');
            $(this).next().slideToggle();
        });
    }
}