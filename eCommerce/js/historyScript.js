//run function when document is ready
$(document).ready(function(){

    //retrieval of filter data
    var thisUser = JSON.parse(sessionStorage.getItem("currentUser"));
    var thisID = thisUser[0].$oid;

    //sending values to php file
    $.post("history.php", {id: thisID}).done(function(data)
    {
        //population of div with content
        $('#orderHistory').html(data);
        //collapsible script
        $('.collapsible').collapsible();
    });
});