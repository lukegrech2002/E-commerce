$(function() 
{
    //run function upon login button press
    $("#login_button").click(function() 
    {
        //retrieval of user input
        var email = document.getElementById("emailIn").value;
        var password = document.getElementById("passwordIn").value;

        //validation of input
        if(emailValidationIn(email) === true && password.length > 0){
            
            //sending values to php file
            $.post("login.php", {email: email, password: password}).done(function(data)
            {
                //checking of echo
                if(data.trim() == "failed"){
                    document.getElementById("outputIn").innerHTML = "Invalid email or password";
                }
                else{
                    //sign user in and redirect to account page
                    sessionStorage.setItem("currentUser", data);
                    location.href = "account.php";
                }
            });
        }
        else{
            document.getElementById("outputIn").innerHTML = "Invalid email or password";
        }
    });
});

function emailValidationIn(email) //validation of email address
{
    var checkEmail = /\S+@\S+\.\S+/;
    var test = checkEmail.test(email);

    if(test == true)
    {
        return true;
    }
    else if(test == false)
    {
        return false;
    }
}