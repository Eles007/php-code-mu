<?php

$country = $params['country'];
$city = $params['city'];

$query = "SELECT city.name, city.description
          FROM city 
          LEFT JOIN country ON country.id = city.country_id
          WHERE city.name ='$city' AND country.name = '$country'";

$res = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($res);

return $page = [
    'title' => $page['name'],
    'content' => $page['description'],
];
?>