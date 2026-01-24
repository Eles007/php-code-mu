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

        if (!empty($_POST['changeRole']) && !empty($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            if ($_POST['changeRole'] == 'user') {
                $role = 'moderator';
            } else {
                $role = 'user';
            }

            $query = "UPDATE users SET role ='$role' WHERE id ='$user_id'";
            mysqli_query($link, $query);
            $message = "Роль успешно изменена!";
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
                    <button type='submit' name='changeRole' value='$user[role]'>$user[role]</button>
                    </form>";
            }
            $content .= "</td>
                    <td>$user[status]</td>
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