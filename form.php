<?php 

if(!empty($_GET['city'])){

    // values
    $city = $_GET['city'];
    $api_key = $_ENV['API_KEY'];

    //request
    $api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&units=metric&appid=ed72c328325a46589cfad9f60b30bb9a';

    $json_response = json_decode(file_get_contents($api_url),true);

    // response data  
    $temp = $json_response['main']['temp'];
    $fell_temp = $json_response['main']['feels_like'];
    $humidity = $json_response['main']['humidity'];
    $weather =$json_response['weather'][0]['main'];
    $weather_desc =$json_response['weather'][0]['description'];
    $min_temp =$json_response['main']['temp_min'];
    $max_temp =$json_response['main']['temp_max'];
    $wind_speed =$json_response['wind']['speed'];
    $city_name= $json_response['name'];
}
?>
