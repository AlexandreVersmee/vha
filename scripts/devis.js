var marginBottomOn = "30px";
var marginBottomOff = "0";
var fadeoutDuration = 3000;
var durationBeforeHideCallout = 20000;


if ($(".callout").is(':visible')){
    $('.underHeader-contact-informations').css("margin-bottom", marginBottomOff);
}

setTimeout(function () {
$('.callout').trigger('close').fadeOut(fadeoutDuration, function () {
        setTimeout(function () {
            $('.underHeader-contact-informations').css("margin-bottom", marginBottomOn);
        }, fadeoutDuration);
    });
}, durationBeforeHideCallout);

$(document).on('closed.zf.callout', function (event) {
    $('.underHeader-contact-informations').css("margin-bottom", marginBottomOn);
});