<?php

require 'config/db.php';
/**@var mysqli $link */

if ($_SESSION['role'] != 'admin') {
    header('Location: ' . $basePath);
    exit;
} else {
    if (isset($_SESSION['auth'])) {
        $query = 'SELECT * FROM users';
        $res = mysqli_query($link, $query);
        for ($data = []; $user = mysqli_fetch_assoc($res); $data[] = $user) {
        }

        if (!empty($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            if (!empty($_POST['changeRole'])) {
                if ($_POST['changeRole'] == 'user') {
                    $role = 'moderator';
                } else {
                    $role = 'user';
                }

                $query = "UPDATE users SET role ='$role' WHERE id ='$user_id'";
            } elseif (isset($_POST['ban'])) {
                if ($_POST['ban'] == '0') {
                    $status = 1;
                } else {
                    $status = 0;
                }
                $query = "UPDATE users SET status ='$status' WHERE id ='$user_id'";
            }

            mysqli_query($link, $query) or die(mysqli_error($link));
            header('Location: ' . $basePath . '/admin');
            exit;
        }

        $content = '<table>
                    <tr>
                        <td>Логин</td>
                        <td>Имя</td>
                        <td>Роль</td>
                        <td>Статус</td>
                    </tr>';
        foreach ($data as $user) {
            $content .= "<tr>
                    <td>$user[login]</td>
                     <td>$user[name]</td>
                    <td>";
            if ($user['role'] == 'admin') {
                $content .= "$user[role]";
            } else {
                $content .= "<form method='post'>
                    <input type='hidden' name='user_id' value='$user[id]'>
                    <input type='hidden' name='changeRole' value='$user[role]'>
                    <button type='submit'>$user[role]</button>
                    </form></td>
                    <td><form method='POST'>
                    <input type='hidden' name='user_id' value='$user[id]'>
                    <input type='hidden' name='ban' value='$user[status]'>
                    <button type='submit'>" . ($user['status'] === '0' ? 'Забанить' : 'Разбанить') . "</button>
                    </form>";
            }
            $content .= "</td>
                        </tr>";
        }
        $content .= '</table>
                     <h3> ' . ($message ?? '') . '</h3>';
    } else {
        $message = 'Пользователь не авторизован!';
    }
}

return $page = [
    'title' => "Админка",
    'content' => $content
];