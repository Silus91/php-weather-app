<?php 

if(!empty($_GET['city'])){

    $city = $_GET['city'];

    $api_key = $_ENV['API_KEY'];

    //request
    $api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&units=metric&appid='.$api_key;
    $json_response = json_decode(file_get_contents($api_url),true);
}
?>
