<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Личный кабинет</title>
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
   <?php require 'html/header.php';?>
  <?php
  if (!isset($_COOKIE['login'])&&!isset($_COOKIE['password'])){
      ?>
    <div class="regcontainer">
	            <form id="form" action="">
	                <div class="inputcontainer">
                    <div class="input"><input type="radio" name="class" value="customers"></div>
	                <div class="label">Болельщик</div>
                    </div>
	                <div class="inputcontainer">
                    <div class="input"><input type="radio" name="class" value="teams"></div>
	                <div class="label">Команда</div>
                    </div>
	                <div class="inputcontainer">
	                <div class="label">Логин:</div>
                    <div class="input"><input type="text" name="username"></div>
                    </div>
                    <div class="inputcontainer">
                    <div class="label">Пароль:</div>
                    <div class="input"><input type="password" name="password"></div>
                    <div class="input"><input type="submit"></div>
                    </div>
	            </form>
	        </div>
	<script>
	$( document ).ready(function(){
	    $('#form').on('submit', function (e){
	       e.preventDefault();
	       $.ajax({
	           method: 'POST',
	           url: 'controller-auth.php',
	           data: $(this).serialize(),
	           success: function(message){
	               if(message==1){
	                   $('.regcontainer').fadeOut('slow');
	                   window.location.reload();
	               }
	           }
	       }); 
	    });
	});
	</script>
	
	<?php
  }else{
      ?>
      
      <section id="content" class="container jc-sb maket__grid">
        <div id="main-content">
            <div class="section-item" id="last-news">
                <div class="section-title"><? echo 'Добро пожаловать в личный кабинет, '.$_COOKIE['login']; ?></div>
                <div class="section-content">
                    
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
      
<?php
  }
  
  ?>
	
<?php require 'footer.php'; ?>
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