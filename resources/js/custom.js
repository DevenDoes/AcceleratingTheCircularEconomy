require('flickity');

$(function () {
    $('.SendEmail').click(function (event) {
        var email = 'allieomens@gmail.com';
        var subject = 'Accelerating The Circular Economy Contact';
        var first = $("[name=firstname]").val();
        var last = $("[name=lastname]").val();
        var emailFrom = $("[name=email]").val();
        var emailBody = 'How Can We Help?: %0D%0A%0D%0AFirst Name: ' + first + '%0D%0ALast Name: ' + last + '%0D%0ARespond To: ' + emailFrom + '%0D%0A';
        document.location = "mailto:"+email+"?subject="+subject+"&body="+emailBody;
    });
});
