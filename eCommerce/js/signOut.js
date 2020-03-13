$(function() 
{
    //upon click of sign out button
    $("#logout_button").click(function() 
    {
        //delete session storage value and return to homepage
        sessionStorage.removeItem('currentUser');
        window.location.href = "index.php";
    });
});