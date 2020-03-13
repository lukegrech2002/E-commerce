$(function() 
{
    //run upon button press
    $("#search").keypress(function(e)
    {
        //check if enter button is pressed
        if(e.which == 13) {
            
            //retrieval of filter and user input
            var input = document.getElementById("search").value.toLowerCase();
            var second = document.getElementById("filter").value.toUpperCase();
            var third = document.getElementById("filterPrice").value;

            //sending values to php file
            $.get("productsSearch.php", {input: input, second: second, third: third}).done(function(data)
            {
                //emptying of content within div
                $('#content').empty();
                //population of div with new content
                $('#content').html(data);
                //modal script
                $('.modal').modal();
            });
        }
    });
});