<!DOCTYPE html>
<html lang="ru">
<head>
    <title>pfcsochi</title>
    <meta charset="UTF-8">

    <!-- Connections -->
        <!-- Google Fonts import-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap" rel="stylesheet">
        <!-- Main css file-->
    <link rel="stylesheet" href="/css/main.css">
        <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<div id="page">
 <?php require 'html/header.php'; ?>
    <section id="content" class="container jc-sb maket__grid">
        <div id="main-content">
            <div class="section-item" id="last-news">
                <div class="section-title">Последние новости</div>
                <div class="section-content">
                    <article>
                        <div class="image">
                            <img src="/img/article.png" alt="article image">
                        </div>
                        <div class="title"><a href="#">Blue Origin показала прототип посадочного модуля на Луну для NASA</a></div>
                    </article>
                    <article>
                        <div class="image">
                            <img src="/img/article.png" alt="article image">
                        </div>
                        <div class="title"><a href="#">Blue Origin показала прототип посадочного модуля на Луну для NASA</a></div>
                    </article>
                    <article>
                        <div class="image">
                            <img src="/img/article.png" alt="article image">
                        </div>
                        <div class="title"><a href="#">Blue Origin показала прототип посадочного модуля на Луну для NASA</a></div>
                    </article>
                    <article>
                        <div class="image">
                            <img src="/img/article.png" alt="article image">
                        </div>
                        <div class="title"><a href="#">Blue Origin показала прототип посадочного модуля на Луну для NASA</a></div>
                    </article>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div id="sidebar-content">
                <div class="title">
                    <p>Актуальные заголовки</p>
                    <span class="delimiter"></span>
                </div>
                <div class="info-news item">
                    <p>Сбор фанатов клуба "Зенит" в городе Москва</p>
                </div>
                <div class="info-news item">
                    <p>Сбор фанатов клуба "Зенит" в городе Москва</p>
                </div>
                <div class="info-news item">
                    <p>Сбор фанатов клуба "Зенит" в городе Москва</p>
                </div>
                <div class="info-news item">
                    <p>Сбор фанатов клуба "Зенит" в городе Москва</p>
                </div>
            </div>
        </div>
    </section>
    <?php require 'html/footer.php'; ?>
</div>
<script>
$(function() {
    $(document).ready(function() {
        let mainContentHeight = function() {
                return $('#main-content').height();
        }, sidebar = $('#sidebar-content');
    
        sidebar.height(mainContentHeight() - 150);

        $(window).resize(function() {
            sidebar.height(mainContentHeight() - 150);
        });
    });
});
</script>
</body>
</html>