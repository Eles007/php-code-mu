<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

if (empty($_SESSION['auth']) || $_SESSION['status'] != 'admin') {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

if (!empty($_POST['delete'])) {
    $query = "DELETE FROM users WHERE id = '$_POST[delete]'";
    mysqli_query($link, $query);
    header('Location: admin.php');
    die();
}
if (!empty($_POST['update'])) {
    $query = "UPDATE users SET status_id = '$_POST[status]' WHERE id = '$_POST[update]'";
    mysqli_query($link, $query);
    $_SESSION['status'] = ($_POST['status'] == 1 ? 'user' : 'admin');
    header('Location: admin.php');
    die();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'header.php' ?>
<div class="auth-wrapper">
    <div class="auth-card auth-card--wide">

        <h1>Админ-панель</h1>
        <p class="admin-subtitle">Управление системой</p>

        <div class="admin-grid">
            <a href="admin.php" class="admin-card">
                <div class="admin-icon">👥</div>
                <div class="admin-title">Пользователи</div>
                <div class="admin-desc">Управление аккаунтами</div>
            </a>

            <a href="profile.php?id=<?= $_SESSION['id'] ?>" class="admin-card">
                <div class="admin-icon">👤</div>
                <div class="admin-title">Мой профиль</div>
                <div class="admin-desc">Личные данные</div>
            </a>

            <a href="logout.php" class="admin-card admin-card--danger">
                <div class="admin-icon">🚪</div>
                <div class="admin-title">Выход</div>
                <div class="admin-desc">Завершить сессию</div>
            </a>
        </div>

        <!-- ТАБЛИЦА ПОЛЬЗОВАТЕЛЕЙ -->
        <h2 class="section-title">Список пользователей</h2>

        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                <tr>
                    <th>Логин</th>
                    <th>Статус</th>
                    <th>Удалить</th>
                    <th>Изменить статус на</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($user = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['login']) ?></td>
                        <td>
                            <span class="status <?= $user['status_id'] == 2 ? 'status-admin' : 'status-user' ?>">
                                <?= $user['status_id'] == '1' ? 'user' : 'admin' ?>
                            </span>
                        </td>
                        <td>
                            <form method="post">
                                <button name="delete"
                                        value="<?= $user['id'] ?>"
                                >
                                    Удалить
                                </button>
                            </form>
                        </td>
                        <td>
                            <form method="post">
                                <input hidden="hidden" name="status"
                                       value="<?= $user['status_id'] == 1 ? 2 : 1 ?>">
                                <button name="update"
                                        value="<?= $user['id'] ?>"
                                >
                                    <?= $user['status_id'] == '1' ? 'admin' : 'user' ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php
                endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="auth-links">
            <a href="index.php">← На главную</a>
        </div>

    </div>
</div>
</body>
</html>