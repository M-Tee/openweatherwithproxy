<?php
class OpenWeatherCall{
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
 if($_POST["city"]){
     $cityName = $_POST["city"];
      $apiKey='d72c9198e329c1ee1652b88a716f343f';
    $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$cityName.'&APPID='.$apiKey;




$openweathercall = new OpenWeatherCall();

$results = $openweathercall->getRequest($url);

echo $results;


 }
 ?>