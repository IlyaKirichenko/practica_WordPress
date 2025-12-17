<?php
function theme_files(){
    wp_register_style(
        'theme_reset', //уникальное имя для стиля
         get_template_directory_uri() . '/css/reset.css', // подключение файла с помощью функции директории
        array(), //пустой массив с идентификаторами стилей
        filemtime(get_template_directory() . '/css/reset.css') //автоматическое обновление версии файла при его изменении
    );
wp_enqueue_style('theme_reset'); //регистрируем файл стилей и добавляем его в очередь на загрузку, а затем стили выводятся в разделе <head> HTML документа.

wp_register_style(
        'theme_main', //уникальное имя для стиля
        get_template_directory_uri() . '/css/main.css',  // подключение файла с помощью функции директории
        array('theme_reset'), // массив с идентификатором стиля theme_reset
        filemtime(get_template_directory() . '/css/main.css' //автоматическое обновление версии файла при его изменении
));
wp_enqueue_style('theme_main');//регистрируем файл стилей и добавляем его в очередь на загрузку, а затем стили выводятся в разделе <head> HTML документа.

wp_register_script(
    'theme_script', //уникальное имя для скрипта
    get_template_directory_uri() . '/js/main.js',  // подключение файла с помощью функции директории
    array(),//пустой массив с идентификаторами стилей
    filemtime(get_template_directory() . '/js/main.js'),  //автоматическое обновление версии файла при его изменении
    true
);
wp_enqueue_script('theme_script'); // хук действия, который позволяет контролировать загрузку скриптов и стилей на страницы сайта.


}
add_action('wp_enqueue_scripts','theme_files'); // прлписка на событие хук "wp_enqueue_script"


function custom_excerpt_length($length){
    return 20; //Ограничеваем аннотации 20 словами
}
// 
add_filter('excerpt_length', 'custom_excerpt_length',999);