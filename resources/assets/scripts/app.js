$(document).ready(function() {
    $('[data-toggle="popover"]').popover({
        html: true
    });
});

var pageHeight = $(document).height();
var footerHeight = $('footer').height();
var minHeight = pageHeight - footerHeight;

$('.wrapper').css({'min-height': minHeight + 30 + 'px' });