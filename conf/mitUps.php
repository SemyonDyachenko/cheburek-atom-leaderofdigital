<?php
//conn


include 'db_conn.php';

function placeMitUps(){
    $mitups = mysqli_query($conn, 'SELECT * FROM `mitUps`') or die(mysqli_error($conn));
    $mitUps = mysqli_fetch_assoc($mitups);
    $content = '';
    while($mitUps){
        $content .= '<article>
                        <div class="title">'.$mitUps['name'].'</div>
                        <div class="event-info">
                            <div class="event-info__item type">
                                <div class="name">Тип мероприятия:</div>
                                <div class="value">'.$mitUps['type'].'</div>
                            </div>
                            <div class="event-info__item sponsor">
                                <div class="name">Организатор:</div>
                                <div class="value">'.$mitUps['organisedBy'].'</div>
                            </div>
                            <div class="event-info__item description">
                                <div class="name">Описание:</div>
                                <div class="value">'.$mitUps['descr'].'</div>
                            </div>
                            <div class="event-info__item location">
                                <div class="name">Место проведедения:</div>
                                <div class="value">'.$mitUps['place'].'</div>
                            <div class="event-info__item appointment-date">
                                <div class="name">Назначенная дата:</div>
                                <div class="value">'.$mitUps['date'].'</div>
                            </div>
                        </div>
                        <div class="bottom container jc-sb ai-c">
                            <a href="#" class="respond">Откликнуться</a>
                            <p>'.$mitUps['placementDate'].'</p>
                        </div>
                    </article>';
    }
    echo $content;
}






?>