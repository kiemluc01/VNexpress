$(document).ready(function() {
    $(window).scroll(function() {
        var scrollPosCur = $(this).scrollTop();
        if (scrollPosCur >= 40) {
            document.getElementById("header").classList.add("background")
        } else {
            document.getElementById("header").classList.remove("background")
        }
    });
});