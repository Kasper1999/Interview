<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WB
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>





  <head>



    <meta charset="utf-8">
    <meta name="keywords" content="Турагенство, турагество, туры, путевки, отдых,Цены на билет в разные страны, Горячие путевки, куда поехать, куда лучше поехать, Лучшие цены на путешествия, Самые красивые места в Швейцарии, Самые красивые места в Китае, Самые красивые места в Новой зеландии, Самые красивые места на Гаваях,Самые красивые места в Испании, Самые красивые места в Чехии,">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="На этом сайте можно найти актуальную информацию о нашей фирме и о доступных пунктах назначения. Найдеие нформацию о наших сотрудниках и способы связи с ними.">
    <meta name="author" content="Александр Касперович">
<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/wb.ico" type="image/x-icon">   <!-- Сделать вместо самолета желтые WB шрифтом хеда -->

    <title>Without Borders</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo("template_directory");?>/vendor/bootstrap/css/bootstrap1.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo("template_directory");?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo("template_directory");?>/css/agencd.css" rel="stylesheet">

    <style>
   li {
    list-style-type: none; /* Убираем маркеры */
   }
   </style>

  </head>

  <body id="yrs">

    <!-- Navigation -->
   <nav class="navbar navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Without Borders</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Меню
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto" align="right">
            <li class="nav-item">
             <?php wp_nav_menu();?>
            </li>
     
          </ul>
        </div>
      </div>
    </nav>

    <header id="page-top" class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Добро пожаловать!</div>
          <div class="intro-heading text-uppercase">Рады Вас видеть</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"  href="#services">Мы можем вам предложить</a>
        </div>
      </div>

 <?php wp_head(); ?>
      
    </header>

    <!-- Header -->