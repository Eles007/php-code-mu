<meta charset="utf-8">
<a href="../index.php"><h1>Главная страница</h1></a>
<?php
$host = "localhost";
$user = "root";
$password = "";
$name = 'mydb';

$link = mysqli_connect($host, $user, $password, $name);
mysqli_query($link, "SET NAMES utf8");

$query = "SELECT 
            products.name as product_name, 
            category.name as category_name
          FROM
            products
          LEFT JOIN products_category ON products_category.products_id = products.id
          LEFT JOIN category ON products_category.category_id = category.id";
$res = mysqli_query($link, $query) or die(mysqli_error($link));

$updateRes = [];
foreach ($res as $row) {
    $updateRes[$row['product_name']][] = $row['category_name'];
}

echo json_encode($updateRes, JSON_UNESCAPED_UNICODE);

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
    echo json_encode($row, JSON_UNESCAPED_UNICODE);
}

function createProductList($arr)
{
    $html_li = '';
    foreach ($arr as $key => $elem) {
        $html_li .= "<l1>$key: " . implode(',', $elem) . "</l1>";
    }
    return $html_li;
}

?>

<ul>
    <?= createProductList($updateRes); ?>
</ul>
