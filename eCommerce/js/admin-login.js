$(function() 
{
    $("#login-button").click(function() 
    {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(adminIsEmpty() == true && password.length > 0){
            $.post("admin-login-function.php", {username: username, password: password}).done(function(data)
            {
                if(data.trim() == "failed"){
                    document.getElementById('error').innerHTML="Wrong Username and/or Password";
                }
                else if (data= 'success')
                {
                    location.href = "admin-dashboard.php";
                }
            });
        }
        else{
            echo = "not this";
        }
    });
});

function adminIsEmpty() 
{
    var input1 = document.getElementById("username").value;
    var input2 = document.getElementById("password").value;
    input1 = input1.trim();
    input2 = input2.trim();

    if(input1 === '' || input2 === '')
    {
        document.getElementById('error').innerHTML="Please fill in both fields.";
        return false;
    }

    else{
        return true;
    }
}
