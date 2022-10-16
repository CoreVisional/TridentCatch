// Set a function onscroll - this will activate if the user scrolls
window.onscroll = function () {
    // Set height to start checking for scroll
    var appear = 20;
    if (window.pageYOffset >= appear) {
        // If more than 20
        document.getElementById("backToTop").style.opacity = "1";
        document.getElementById("backToTop").style.pointerEvents = "all";
    } else {
        // Else hide it
        document.getElementById("backToTop").style.opacity = "0";
        document.getElementById("backToTop").style.pointerEvents = "none";
    }
};
