<?php
class OpenWeatherCall{
   //function to make that api call
   public function getRequest($url) {
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
   
       $result = curl_exec($curl);
       if (!$result) {
           die("Connection Failure");
       }
       curl_close($curl);
       return $result;
   }
}
//checking whether we actually got anything from ajax
 if($_GET["city"]){
     $cityName = $_GET["city"];
      $apiKey='YOUR API KEY';
    $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$cityName.'&APPID='.$apiKey;


$openweathercall = new OpenWeatherCall();

// we make the api call
$results = $openweathercall->getRequest($url);

echo $results;


 }
 ?>