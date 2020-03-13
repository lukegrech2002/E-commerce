function isEmpty() 
{
    var input1 = document.getElementById("product_name").value;
    var input2 = document.getElementById("image").value;
    var input3 = document.getElementById("quantity").value;
    var input4 = document.getElementById("creation_year").value;
    var input5 = document.getElementById("platform").value;
    var input6 = document.getElementById("keywords").value;
    var input7 = document.getElementById("price").value;

    input1 = input1.trim();
    input2 = input2.trim();
    input3 = input3.trim();
    input4 = input4.trim();
    input5 = input5.trim();
    input6 = input6.trim();
    input7 = input7.trim();

    if(input1 === "" || input2 === "" || input3 === "" || input4 === "" || input5 === "" || input6 === "" || input7 === "" || input1 == null || input2 == null || input3 == null || input4 == null || input5 == null || input6 == null || input7 == null)
    {
        document.getElementById("msgerror").innerHTML="Please fill in all fields"; //Error message
        return false;
    }

    else {
        return true;
    }
}

//Validation
function allNum()
{
    var input3 = document.getElementById("quantity").value;
    var input4 = document.getElementById("creation_year").value;
    var input5 = document.getElementById("price").value;

    input3 = input3.trim();
    input4 = input4.trim();
    input5 = input5.trim();

    if (!(/^[0-9]*$/.test(input3)))
    {
        document.getElementById("msgerror").innerHTML="Please use whole numbers for Quantity.";
        return false;
    }

    else if (!(/^[0-9]*$/.test(input4)))
    {
        document.getElementById("msgerror").innerHTML="Please use numerals for Year.";
        return false;
    }

    if (!(/^[0-9]*\.?[0-9]*$/.test(input5)))
    {
        document.getElementById("msgerror").innerHTML="Please use numerals for Price.";
        return false;
    }
    
    else{
        return true;
    }
}
