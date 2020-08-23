<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Последнии мероприятия</title>
    <meta charset="UTF-8">

    <!-- Connections -->
        <!-- Google Fonts import-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap" rel="stylesheet">
        <!-- Main css file-->
    <link rel="stylesheet" href="css/main.css">
        <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<div id="page">
<?php require 'html/header.php'; ?>
    <section id="content" class="container jc-sb maket__grid">
        <div id="main-content">
            <div class="section-item" id="recent-events">
                <?php if(!empty($_COOKIE['user_id'])) { ?>
                    <div class="section-addnew"><a href="new.php">Новое событие</a><</div>
         
                <?php } 
                    else { ?>
            <div class="section-addnew"><a class="addnew-meetup" href="new.php">Новое событие</a></div>     
                <?php } ?>
                
                <div class="section-title">Последние события</div>
                <div class="section-content">
                    <?php
                    //include 'conf/db_conn.php';
                    //$conn = mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($conn));
    function placeMitUps(){
    $mitups = mysqli_query(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek'), 'SELECT * FROM mitUps') or die(mysqli_error(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek')));
    $mitUps = mysqli_fetch_assoc($mitups);
    $content = '';
    //echo 1;
    foreach($mitUps as $key=>$value){
        if($key == 'name'){
            $content.='<article>
                        <div class="title">'.$value.'</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">';
        }
        if($key == 'type'){
            $content .= $value.'</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">';
        }
        if($key == 'organisedBy'){
            $content .= $value.'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">';
        }
        if($key == 'descr'){
            $content .= $value.'</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведения:</div>
                                <div class="value">';
        }
        if($key == 'place'){
            $content .= $value.'</div>
                            </div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">';
        }
        if($key == 'date'){
            $content .= $value.'</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond"';
        }
        if($key == 'id'){
            $content .= ' id="'.$value.'">Откликнуться</a>
                            <p>';
        }
        if($key == 'placementDate'){
            $content .= $value.'</p>
                        </div>
                    </article>';
        }
        
                    /*if(!($mitUps['name']!='')){
                        break;
                    }*/
    }
    echo $content;
}
placeMitUps();
                    ?>
                    
                    <!--<article>
                        <div class="title">Митап фанатов футбольного клуба 'Сочи' в Краснодаре 21 июня. Приходите все</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">сходка фанатов</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">ФК 'СОЧИ'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">Всем привет, мы решили организовать сходку фанатов в городе Краснодар. Приходите все в парк Галицкого завтра 23 августа. Ждем всех фанатов клуба Сочи. Время с 20 часов вечера до полонучи.Ждем каждого, бесплатные автографы.</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведедения:</div>
                                <div class="value">Краснодарский край, г. Краснодар</div>
                            </div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">23 августа 2020 год.</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond">Откликнуться</a>
                            <p>23.08.2020 в 17:09</p>
                        </div>
                    </article>
                    
                    <article>
                        <div class="title">Митап фанатов футбольного клуба 'Сочи' в Краснодаре 21 июня. Приходите все</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">сходка фанатов</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">ФК 'СОЧИ'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">Всем привет, мы решили организовать сходку фанатов в городе Краснодар. Приходите все в парк Галицкого завтра 23 августа. Ждем всех фанатов клуба Сочи. Время с 20 часов вечера до полонучи.Ждем каждого, бесплатные автографы.</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведедения:</div>
                                <div class="value">Краснодарский край, г. Краснодар</div>
                            </div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">23 августа 2020 год.</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond">Откликнуться</a>
                            <p>23.08.2020 в 17:09</p>
                        </div>
                    </article>

                    <article>
                        <div class="title">Митап фанатов футбольного клуба 'Сочи' в Краснодаре 21 июня. Приходите все</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">сходка фанатов</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">ФК 'СОЧИ'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">Всем привет, мы решили организовать сходку фанатов в городе Краснодар. Приходите все в парк Галицкого завтра 23 августа. Ждем всех фанатов клуба Сочи. Время с 20 часов вечера до полонучи.Ждем каждого, бесплатные автографы.</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведедения:</div>
                                <div class="value">Краснодарский край, г. Краснодар</div>
                            </div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">23 августа 2020 год.</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond">Откликнуться</a>
                            <p>23.08.2020 в 17:09</p>
                        </div>
                    </article>

                    <article>
                        <div class="title">Митап фанатов футбольного клуба 'Сочи' в Краснодаре 21 июня. Приходите все</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">сходка фанатов</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">ФК 'СОЧИ'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">Всем привет, мы решили организовать сходку фанатов в городе Краснодар. Приходите все в парк Галицкого завтра 23 августа. Ждем всех фанатов клуба Сочи. Время с 20 часов вечера до полонучи.Ждем каждого, бесплатные автографы.</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведедения:</div>
                                <div class="value">Краснодарский край, г. Краснодар</div>
                            </div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">23 августа 2020 год.</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond">Откликнуться</a>
                            <p>23.08.2020 в 17:09</p>
                        </div>
                    </article>-->



                </div>
            </div>
        </div>
        <div id="sidebar">
            <div id="sidebar-content">
                <div class="title">
                    <p>Недавние новости</p>
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