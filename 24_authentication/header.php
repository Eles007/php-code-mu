<header class="site-header">
    <div class="header-wrapper">
        <div class="logo">
            <a href="index.php">MyProject</a>
        </div>

        <nav class="header-nav">
            <a href="index.php">Главная</a>
            <?php
            if (!empty($_SESSION['auth'])): ?>
                <?php
                if (!empty($_SESSION['status']) && $_SESSION['status'] === 'admin'): ?>
                    <a href="admin.php">Админка</a>
                <?php
                endif; ?>
                <a href="users.php">Пользователи</a>
                <a href="profile.php?id=<?= $_SESSION['id'] ?>">Профиль</a>
                <a><?= $_SESSION['login'] ?> - <?= $_SESSION['status'] ?></a>
                <a href="logout.php" class="logout-btn">Выход</a>
            <?php
            else: ?>
                <a href="login.php">Войти</a>
                <a href="register.php">Регистрация</a>
            <?php
            endif; ?>
        </nav>
    </div>
</header>