$(function() 
{
    //run upon changing value of platform filter
    $("#filter").on('change', function()
    {
        //reset search value
        $("#search").val('');

        //retrieval of filter data
        var input = document.getElementById("filter").value.toUpperCase();
        var other = document.getElementById("filterPrice").value;

        //sending values to php file
        $.get("productsFilterPlatform.php", {input: input, second: other}).done(function(data)
        {
           //emptying of content within div
            $('#content').empty();
            //population of div with new content
            $('#content').html(data);
            //modal script
            $('.modal').modal();
        });
    });
});