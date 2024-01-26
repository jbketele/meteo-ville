<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $url1 = 'https://api.openweathermap.org/data/2.5/weather?id=3003796&appid=494ea176a1e4fa34f997ec15cb660869&units=metric';
    $response = file_get_contents($url1);
    echo $response;
    $data = json_decode($response, true);
    $ville = $data['name'];
    echo "<h1>Météo de $ville </h1>";
    $temp = $data ['main']['temp'];
    $tempRessenti = $data['main']['feels_like'];
    echo "Température : $temp et ressenti : $tempRessenti <br>";
    $icon_url = 'http://openweathermap.org/img/wn/' . $data['weather'][0]['icon'] . '.png';
    echo '<img src="' . $icon_url . '" alt="Weather Icon"> </img>';

    $url2 = 'https://api.openweathermap.org/data/2.5/weather?id=5128581&appid=494ea176a1e4fa34f997ec15cb660869&units=metric';
    $response = file_get_contents($url2);
    $data = json_decode($response, true);
    $ville = $data['name'];
    echo "<h1>Météo de $ville </h1>";
    $temp = $data ['main']['temp'];
    $tempRessenti = $data['main']['feels_like'];
    echo "Température : $temp et ressenti : $tempRessenti <br>";
    $icon_url = 'http://openweathermap.org/img/wn/' . $data['weather'][0]['icon'] . '.png';
    echo '<img src="' . $icon_url . '" alt="Weather Icon"> </img>';


    ?>
</body>
</html>