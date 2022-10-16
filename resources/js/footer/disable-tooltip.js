// Disable built-in mouseover tooltip without disrupting SEO
document.querySelectorAll("a[href]").forEach((el) => {
    el.setAttribute(
        "data-title-cache",
        el.textContent.trim() || el.getAttribute("href")
    );
    el.setAttribute("title", el.getAttribute("data-title-cache"));
    el.addEventListener("mouseenter", (_) => {
        el.setAttribute("title", "");
    });
    el.addEventListener("mouseleave", (_) => {
        el.setAttribute("title", el.getAttribute("data-title-cache"));
    });
});
