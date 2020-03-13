$(function() 
{
  //run upon click of sign up button
  $("#signup_button").click(function()
    {
      //retrieval of user input
      var email = document.getElementById("emailUp").value;
      var fName = document.getElementById("firstnameUp").value;
      var sName = document.getElementById("surnameUp").value;
      var dob = document.getElementById("dobUp").value;
      var address = document.getElementById("addressUp").value;
      var locality = document.getElementById("localityUp").value;
      var country = document.getElementById("countryUp").value;
      var mobileNum = document.getElementById("mobileUp").value;
      var password = document.getElementById("passwordUp").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      //validation of input
      if (emailValidation(email) == true && dobValidation(dob) == true && passwordValidationUp(password, confirmPassword) == true && letterValidation(fName, sName, locality, country) == true && numberValidation(mobileNum) == true && address != "")
      {
          //sending values to php file
          $.post("signUp.php", {email: email, fName: fName, sName: sName, dob: dob, address: address, locality: locality, country: country, mobileNum: mobileNum, password: password}).done(function(data)
          {
            //checking of echo
            if(data[0] == "[") {
              sessionStorage.setItem("currentUser", data);
              location.href = "account.php";
            }
            else if(data == "failedemail"){
              document.getElementById("output").innerHTML = "Invalid Email";
            }
            else if(data == "failedname"){
              document.getElementById("output").innerHTML = "Invalid Name";
            }
            else if(data == "failedsurname"){
              document.getElementById("output").innerHTML = "Invalid Surname";
            }
            else if(data == "faileddob"){
              document.getElementById("output").innerHTML = "Invalid Date of Birth";
            }
            else if(data == "failedlocality"){
              document.getElementById("output").innerHTML = "Invalid Locality";
            }
            else if(data == "failecountry"){
              document.getElementById("output").innerHTML = "Invalid Country";
            }
            else if(data == "failedmobile"){
              document.getElementById("output").innerHTML = "Invalid mobile number";
            }
            else {
              document.getElementById("output").innerHTML = "Email already taken";
            }
          });
      }
      else if (emailValidation(email) == false){
          document.getElementById("output").innerHTML = "Invalid Email";
          return false;
      }
      else if (dobValidation(dob) == false){
          document.getElementById("output").innerHTML = "Invalid Date of Birth";
          return false;
      }
      else if (passwordValidationUp(password, confirmPassword) == false){
          document.getElementById("output").innerHTML = "Passwords must match and be at least 8 characters long";
          return false;
      }
      else if (address == ""){
        document.getElementById("output").innerHTML = "Invalid address";
        return false;
    } 
  });
});

function emailValidation(email) //validation of email address
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

function dobValidation(dob) //validation of date of birth
{
    var checkDob = /\S+-\S+-\S+/;
    var test = checkDob.test(dob);

    if(test == true && dob.length == 10)
    {
      return true;
    }
    else if(test == false || dob.length > 10 || dob.length < 10)
    {
      return false;
    }
}

function passwordValidationUp(password, confirmPassword) //validation of password
{
  var passwordLength = password.length;
  
  if (passwordLength >= 8 && password == confirmPassword){
    return true;
  }
  else{
    return false;
  }
}

function letterValidation(fName, sName, locality, country) //validation of letters
{
    if(/^[a-zA-Z]+$/.test(fName) == true && /^[a-zA-Z]+$/.test(sName) == true && /^[a-zA-Z]+$/.test(locality) == true && /^[a-zA-Z]+$/.test(country) == true)
      {
        return true;
      }
    else
    {
      if(/^[a-zA-Z]+$/.test(fName) == false)
      {
        document.getElementById("output").innerHTML = "Invalid Name";
      }
      else if(/^[a-zA-Z]+$/.test(sName) == false)
      {
        document.getElementById("output").innerHTML = "Invalid Surname";
      }
      else if(/^[a-zA-Z]+$/.test(locality) == false)
      {
        document.getElementById("output").innerHTML = "Invalid Locality";
      }
      else if(/^[a-zA-Z]+$/.test(country) == false)
      {
        document.getElementById("output").innerHTML = "Invalid Country";
      }
      return false;
    }  
}

function numberValidation(mobileUp) //validation of phone number
{
  if(isNaN(mobileUp) || mobileUp == null)
  {
    document.getElementById("output").innerHTML = "Invalid phone number";
    return false;
  }
  else
  {
    return true;
  }
}