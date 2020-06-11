$(document).ready(function(){
    $(document).on('click', '.fa-header_navbar a', function (event) {
        event.preventDefault();
        $('.fa-header_menu').addClass('show fadein');
    });
    $(document).on('click', '.fa-close_menu', function (event) {
        event.preventDefault();
        $('.fa-header_menu').addClass('fadeout').removeClass('fadein');
        setTimeout(function () {
            $('.fa-header_menu').removeClass('show fadeout');
        }, 400)
    });
});
