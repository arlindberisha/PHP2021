function confirmationDelete(anchor){
    var conf = confirm('Are you sure want to delete this client?');
    if(conf)
        window.location=anchor.attr("href");
    }
function confirmationUpdate(anchor){
    var conf = confirm('Are you sure want to UPDATE this client?');
    if(conf)
        window.location=anchor.attr("href");
    }
    function confirmationMail(anchor){
        var conf = confirm('Are you sure want send e-mail to this client?');
        if(conf)
            window.location=anchor.attr("href");
        }