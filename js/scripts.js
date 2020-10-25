$(document).ready(function(){
    $('form#get-weather').submit(function(event){

        event.preventDefault();
        let cityName = $('#inputCity').val();

        //making a get request to the proxy which makes the api call
        $.ajax({
            type: "GET",
            url: './proxy/openweatherapicall.php',
            data: {city:cityName },
            //if success, it returns a response
            success : function(response){
                let parsedJson = $.parseJSON(response)
                populateResults(parsedJson);
                //console.log($.parseJSON(response));
            }
          });
          return false;

          function populateResults(parsedJson){
            $('.response').text(parsedJson.name);
          }
    })
});
