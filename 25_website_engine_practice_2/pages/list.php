<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location: ' . '/login');
    exit;
} elseif (isset($_SESSION['status']) && $_SESSION['status'] === '1') {
    header('Location: ' . $basePath . '/ban');
} else {
    $query = 'SELECT * FROM users';
    $res = mysqli_query($link, $query);
    for ($data = []; $user = mysqli_fetch_assoc($res); $data[] = $user) {
    }

    if (!empty($_POST['user_id']) && isset($_POST['ban'])) {
        $user_id = $_POST['user_id'];
        if ($_POST['ban'] == '0') {
            $status = 1;
        } else {
            $status = 0;
        }
        $query = "UPDATE users SET status ='$status' WHERE id ='$user_id'";
        mysqli_query($link, $query) or die(mysqli_error($link));
        header('Location: ' . $basePath . '/list');
        exit;
    }


    $content = ' <table>
                    <tr>
                        <td> Логин</td>
                        <td> Имя</td>
                        ' . ($_SESSION['role'] != 'user' ? ' <td>Статус </td > ' : '') . '
    </tr > ';


    foreach ($data as $user) {
        $content .= "<tr>
                    <td>$user[login]</td>
                     <td>$user[name]</td>";
        if ($_SESSION['role'] != 'user' && $user['role'] == 'user') {
            $content .= " <td><form method='POST'>
                    <input type='hidden' name='user_id' value='$user[id]'>
                    <input type='hidden' name='ban' value='$user[status]'>
                    <button type='submit'>" . ($user['status'] === '0' ? 'Забанить' : 'Разбанить') . "</button>
                    </form></td>";
        }
        $content .= "</tr>";
    }
    $content .= ' </table >
                     <h3 > ' . ($message ?? '') . ' </h3 > ';
}

return $page = [
    'title' => "Список пользователей",
    'content' => $content ?? ''
];