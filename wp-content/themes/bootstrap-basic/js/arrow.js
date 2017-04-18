$(document).ready(function() {
    $(".down").click(function () {
        $('html, body').animate({
            scrollTop: $("#latest").offset().top-76
        }, 1000);
    });//arrow with scrool effect in banner section
});
