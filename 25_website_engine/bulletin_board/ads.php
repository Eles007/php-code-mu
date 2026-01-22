<?php

if ($_SESSION['auth']) {
    $query = "SELECT * FROM ads
              LEFT JOIN category ON category.id = ads.category_id";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
    }

    $content = '<table>
                   <tr>
                        <td>Название</td>
                        <td>Цена</td>
                        <td>Город</td>
                        <td>Время создания</td>
                   </tr>';
    foreach ($data as $ads) {
        $content .= "<tr>
                        <td>$ads[title]</td>
                        <td>$ads[price]</td>
                        <td>$ads[city]</td>
                        <td>$ads[created_at]</td>
                   </tr>";
    }
    $content .= "
                </table>
                <h3>Добавить объявление</h3>
                <form method=\"post\">
                <table>
                    <tr> <td>Название</td> 
                         <td><input type='text' name='title'></td>
                    </tr>
                    <tr> <td>Цена</td> 
                         <td><input type='number' name='price'></td>
                    </tr>
                    <tr> <td>Город</td> 
                         <td><input type='text' name='city'></td>
                    </tr>
                    <tr>
                </table> 
                <div>
                   Категория <select name='category'>";


    if ($_POST) {
        if (!empty($_POST['title']) && !empty($_POST['price']) & !empty($_POST['city']) && !empty($_POST['category'])) {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $city = $_POST['city'];
            $created_at = date('Y-m-d H:i:s');
            $category = $_POST['category'];
            $query = "INSERT 
                  INTO ads(title,price, city, created_at, category_id) 
                  VALUES ('$title','$price','$city','$created_at','$category')";
            mysqli_query($link, $query);
            $message = "Успешно добавлено объявление";
            header('Location: ./ads');
            exit;
        } else {
            $message = "Заполните форму!";
        }
    }


    $query = "SELECT * FROM category";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
    }

    foreach ($data as $category) {
        $content .= "<option value='$category[id]'>$category[name]</option>";
    }

    $content .= "
                 </select>
                   </div>              
                <button type=\"submit\">Добавить</button> 
                </form>
                <h3>" . ($message ?? '') . "</h3>
                ";

    $page = [
        'title' => 'Список объявлений',
        'content' => $content,
    ];
} else {
    $page = [
        'title' => 'Ошибка ',
        'content' => 'Войдите в профиль!',
    ];
}

return $page;