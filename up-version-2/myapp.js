function scrollToTop() {
    window.scrollTo(1600, 1300);
}

function teleShare(text) {
    window.location.replace('https://telegram.me/share/url?text=' + text + '&url=' + window.location.href);
}
//header //
$("#icon-ham").click(function() {
    $(".header-menu-list").css("display", "flex");
    // alert("ok");
    // $(".humberger-icon").css("display", "none");
    // $(".header-logo").css("width", "100%");
    // $(".header-logo").css("justify-content", "flex-end");
    //              bottom code for full height
    // var height = $("header").css("height");
    // $("#nav-res-head").css("height", height);
    $("body").append("<div class='back-container'></div>");
    $(".back-container").click(function() {
        $(".header-menu-list").css("display", "none");
        $(this).remove();
    })
});

$(".sublayer .title").click(function() {
    $(".sublayer>ul").css("display", "block");
    $("body").append("<div class='back-container'></div>");
    $(".back-container").click(function() {
        $(".sublayer>ul").css("display", "none");
        $(this).remove();
    })
});


///////////
//book//
// window.onload = function() {
//     var script = document.createElement("script");
//     script.type = "text/javascript";
//     script.src = "https://jsonip.com/?callback=DisplayIP";
//     document.getElementsByTagName("head")[0].appendChild(script);
// };

// function DisplayIP(response) {
//     document.getElementById("ipaddress").innerHTML = response.ip;
// }
