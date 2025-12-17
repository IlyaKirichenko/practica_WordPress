<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Создаем динамическую ссылку на каталог темы, 
    которая будет всегда корректной, даже если тема активирована из другого местоположения.
    Также добавляем автоматическое обновление версии style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=<?php echo time();?>"> 
    <!-- Выводим элементы из секции <head> -->
    <?php wp_head() ?> 
</head>

<body>
    <header class ="header_section">
        <!-- Добавляем логотип -->
    <img class ="header_logo" src="<?php echo get_template_directory_uri(); ?>/image/logotype_GoldFrame.png" alt="logo">
    <!--  Выводим HTML-код формы поиска на сайт. -->
    <?php get_search_form(); ?>
    <!-- Создаем меню навигации -->
    <!-- Добавляем функцию home_url(), которая возвращает URL главной страницы сайта -->
    <a href="<?php echo home_url(); ?>">Главная</a> 
    <!-- Отображаем зарегистрированного ранее меню -->
    <?php wp_nav_menu(array(
        'theme_locations' => 'header-menu', //выводим меню, которое было назначено в настройках внешнего вида («Меню») для расположения header-menu
        'menu_class' => 'header_nav', //применить стили оформления через таблицу стилей (CSS)
    )) ?>
</header>`  