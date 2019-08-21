function isMobile() {
    try{ document.createEvent("TouchEvent"); return true; }
    catch(e){ return false; }
}

if(isMobile()){
    $('html').addClass('device');
} else {
    $('html').removeClass('device');
}

// removeTextNodes
$('.removeTextNodes').contents().filter(function() {
　　return this.nodeType === 3;
}).remove();