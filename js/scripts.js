$(document).ready(function(){
    $('form#get-weather').submit(function(event){

        event.preventDefault();
        let city = $('#inputCity').val();

        
        console.log(city);
        //ajax 
        $.ajax({
            type: "POST",
            url: './proxy/openweatherapicall.php',
            data: {city:city }
          });
          return false;
    })
});
