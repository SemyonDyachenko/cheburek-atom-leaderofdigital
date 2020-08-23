<?php

require "conf/add_meetup.php";

if(empty($_COOKIE['login']))
{
//header('Location: https://'.$_SERVER['HTTP_HOST']);    
}

if(isset($_POST['upload-meetup-btn'])) {
    if(!empty($_POST['meetup-type-field']) && !empty($_POST['meetup-content-field']) && !empty($_POST['meetup-location-field']) && !empty($_POST['meetup-date-field']) && !empty($_POST['meetup-title-field'])) {
        
        if(add_meetup($_POST['meetup-title-field'],$_POST['meetup-type-field'],$_POST['meetup-content-field'],$_POST['meetup-location-field'],$_POST['meetup-date-field'],$_POST['meetup-title-field'])) {
            header('Location: https://'.$_SERVER['HTTP_HOST'].'/last_activity.php');
        }
        else {
           echo "Что-то пошло не так"; 
        }
    }
    else {
        echo "заполните поля";
    }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf8'>
        
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    
        <link rel="stylesheet" href="css/newmeetup.css">
    </head>
        
    <body>
        <div id="page">
            <div class="new-meetup-section">
                <div class="new-meetup-form">
                    <form method="POST" action="last_activity.php">
                        <div class="form-item">
                            <h2>Sport Meetups</h2>
                        </div>
                        
                       <div class="form-item">
                            <input type="text" class="meetup-title-field" name="meetup-title-field" placeholder="Заголовок мероприятия">
                        </div>
                        
                        <div class="form-item">
                            <input type="text" class="meetup-type-field" name="meetup-type-field" placeholder="Тип мероприятия">
                        </div>
                         <div class="form-item">
                             <textarea class="meetup-content-field" name="meetup-content-field" placeholder="Подробное описание"></textarea>
                         </div>
                          <div class="form-item">
                              <input type="text" class="meetup-location-field" name="meetup-location-field" placeholder="Место провидения">
                          </div>
                          <div class="form-item">
                               <input type="date" class="meetup-date-field" name="meetup-date-field" placeholder="Назначенная дата">
                          </div>
                          <div class="form-item">
                              <button type="submit" name="upload-meetup-btn" class="upload-meetup-btn">Создать</button>
                          </div>
                    </form>
                </div>
            </div
            
            
        </div>
    </body>
    
</html>