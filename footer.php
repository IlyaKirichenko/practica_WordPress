<!-- Подключаем библиотеку JQuery -->
<script
 src="https://code.jquery.com/jquery-3.7.1.js" 
 integrity= "sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
crossorigin="anonymous"> 
</script>
<!-- Выводим дополнительные скрипты, стили или HTML-разметку в нижнюю часть страницы -->
<?php wp_footer() ?>
<footer>
    <div class ="footer_section">
    2025 goldframe@gmail.com. Все права защищены.
    </div>
    <a href="<?php echo home_url(); ?>" class = "home_link">Главная</a>

    <?php wp_nav_menu(array(
        'theme_locations' => 'header-menu',
        'menu_class' => 'footer_nav',
    )) ?>
</footer>
</body>
</html>