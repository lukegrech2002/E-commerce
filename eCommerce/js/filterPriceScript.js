$(function() 
{
    //run upon changing value of price filter
    $("#filterPrice").on('change', function()
    {
        //reset search value
        $("#search").val('');

        //retrieval of filter data
        var input = document.getElementById("filterPrice").value;
        var other = document.getElementById("filter").value.toUpperCase();
        
        //sending values to php file
        $.get("productsFilterPrice.php", {input: input, second: other}).done(function(data)
        {
            //emptying of content within div
            $('#content').empty();
            //population of div with new content
            $('#content').html(data);
            //modal script
            $('.modal').modal();
        });
    });
})