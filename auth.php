<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Авторизация | Регистрация</title>
    <meta charset="UTF-8">

    <!-- Connections -->
        <!-- Google Fonts import-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap" rel="stylesheet">
        <!-- Main css file-->
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div id="page">
    <header class="grid container jc-sb ai-c">
        <div class="container ai-c">
            <div id="logo"><a href="/">Sport Meetups</a></div>
            <nav>
                <ul class="container">
                    <li><a href="#">Новости спорта</a></li>
                    <li><a href="#">Последние события</a></li>
                    <li><a href="#">Поиск событий</a></li>
                </ul>
            </nav>
        </div>
        <div id="user-auth"><a href="#">Зарегистрироваться</a></div>
    </header>
    <section id="content" class="container jc-sb maket__grid">
        <div id="auth">
            <div id="state">Регистрация</div>
            <div id="auth-form">
                <form action="">
                    <div class="category">
                        <ul>
                            <li>Команда</li>
                            <li class="active">Пользователь</li>
                        </ul>
                    </div>
                    <input type="text" placeholder="E-mail">
                    <input type="text" placeholder="Пароль">
                    <div class="if-isset">
                        <a href="#">Уже есть аккаунт?</a>
                    </div>
                    <button>Присоединиться</button>
                    <div class="social-auth">
                        <div class="social-button vk">
                            <a href="#">Войти через ВКонтакте</a>
                        </div>
                    </div>
                    <div class="policy-agreement">
                        <a href="#">Политика конфиденциальности и обработки персональных данных пользователей</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="grid">
        Chebyrek 2020, all rights reserved.
    </footer>
</div>
</body>
</html>