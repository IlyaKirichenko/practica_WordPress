<!-- Подключаем файл шаблона заголовка (header) из текущей темы -->
<?php get_header() ?>
<main class = "main">
<!-- Создаем контент с основной информацией -->
    <section class ="content">
        <!-- Цикл для извлечения содержимого постов или страниц отобразим контент на странице -->
        <!-- if (have_posts()) проверяет, имеются ли посты, доступные для вывода на текущей странице. -->
         <!-- have_posts() запускает цикл, проверяющий наличие записей (постов или страниц) -->
          <!-- the_post() загружаем глобальные переменные текущего поста -->
        <?php if (have_posts()): while(have_posts()) : the_post(); ?>
            <div class = "content_item">
                <!-- Создаем заголовок с ссылкой на пост -->
                 <!-- the_permalink()  выводит постоянный адрес страницы или записи, к которой относится ссылка -->
                  <!-- the_title выводит название текущего поста или страницы. -->
                <h2 class = "content_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                   <p>Опубликовано <?php the_time('F jS, Y') ?></p>
                   <p>Автор: <?php the_author(); ?></p>
                   <!-- the_category(', ') встроенная функция WordPress, предназначенная для вывода списка категорий записей. -->
                   <p>Категория: <?php the_category(', '); ?></p>
                   <!-- the_excerpt() - эта функция не принимает никаких параметров. 
                    По умолчанию она берёт содержимое поля "Краткое описание" (или аннотации), 
                    которое задаётся вручную автором при создании записи -->
                   <?php the_excerpt(); ?>
            </div>
        <?php endwhile; else: ?>
            <p>Записи отсутсвуют.</p>
            <?php endif; ?>
    </section>
    <!-- Создаем секцию рубрик -->
            <section class = "categories">
                <!-- Заголовок -->
                <h2 class = "categories_title">Категории</h2>
                <!-- Список рубрик -->
                 <ul class = "categories_list">
                        <?php $args = array(
                            // <!-- Сортировка по имени -->
                            'orderby' => 'name', 
                            // <!-- Отсортировано по возрастанию -->
                            'order' => 'ASC',
                            // <!-- Показывать пустые рубрики -->
                            'hide_empty' => 0
                        );
                        $categories = get_categories($args);
                        foreach($categories as $category){
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        };
                        ?>
            </section>
</main>
<!-- Подключаем файл футера (подвала) сайта -->
<?php get_footer() ?>