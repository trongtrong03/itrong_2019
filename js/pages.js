// Highlight
hljs.initHighlightingOnLoad();


// copy
new Clipboard(".copy-btn");
$(".copy-btn").click(function (e) {
    var elem = $(this);
    if (elem.hasClass("copied")) {
        return;
    }
    elem.addClass("copied");
    window.setTimeout(function (e) {
        elem.removeClass("copied");
    }, 1000);
});