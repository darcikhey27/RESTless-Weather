<?php
require_once("location.php");
require_once("creds.php");

$cityName = $_GET["city"];
echo $cityName;

$json = Location::getWeatherData($cityName);

// $main = $json["weather"][0]["main"];
// $description = $json["weather"][0]["description"];
// $icon = $json["weather"][0]["icon"];

// // maybe add more vars for max and min and humidity data
// $temp = $json["main"]["temp"];
// $cityID = $json["id"];
// $name = $json["name"];

// $stmt = $pdo->prepare("INSERT INTO city_weather VALUES (NULL,?,?,?,?,?,?)");
// $stmt->execute([$name, $cityID, $main, $description, $icon, $temp]);



// $stmt = $pdo->prepare("SELECT * FROM city_weather WHERE cityID=?");
// $stmt->execute([$cityID]);
// http_response_code(200);
// echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
echo json_encode($json);

?>