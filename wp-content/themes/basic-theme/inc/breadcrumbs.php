<?php

function site_breadcrumbs()
{

    // получаем номер текущей страницы
    $page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $separator = '<svg width="36" height="13" viewBox="0 0 36 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M35.8227 7.01805C35.8504 6.98871 35.8753 6.95668 35.8972 6.92238L35.9241 6.8702C35.9481 6.83101 35.9649 6.78752 35.9738 6.74192L35.9883 6.68756C36.0039 6.60429 36.0039 6.51861 35.9883 6.43534L35.9717 6.37881L35.9531 6.31358C35.9433 6.2912 35.9322 6.26942 35.92 6.24836L35.8952 6.2027C35.8722 6.16669 35.8458 6.13319 35.8165 6.10268L30.2544 0.251702C30.2004 0.178718 30.1322 0.118645 30.0543 0.0754667C29.9765 0.0322885 29.8908 0.0069922 29.803 0.00125659C29.7152 -0.00447901 29.6272 0.00947728 29.5448 0.0421988C29.4625 0.0749203 29.3878 0.125658 29.3255 0.191049C29.2633 0.25644 29.215 0.334988 29.1839 0.421483C29.1527 0.507977 29.1395 0.60044 29.1449 0.692739C29.1504 0.785038 29.1744 0.875062 29.2155 0.95684C29.2566 1.03862 29.3138 1.11028 29.3833 1.16707L33.8859 5.90482L0.620773 5.90482C0.456134 5.90482 0.298237 5.97354 0.18182 6.09587C0.0654023 6.2182 -2.8919e-07 6.38411 -2.81628e-07 6.5571C-2.74066e-07 6.7301 0.0654023 6.89601 0.18182 7.01834C0.298237 7.14066 0.456134 7.20939 0.620773 7.20939L33.8859 7.20938L29.3833 11.9471C29.2903 12.0726 29.2442 12.2295 29.2536 12.3882C29.263 12.5469 29.3272 12.6965 29.4342 12.8089C29.5412 12.9214 29.6836 12.9889 29.8347 12.9987C29.9857 13.0086 30.135 12.9602 30.2544 12.8625L35.8227 7.01805Z" fill="#212121"/>
</svg>
 '; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if (is_front_page()) {

        if ($page_num > 1) {
            echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }
    } else { // не главная

        echo '<a href="' . site_url() . '">Главная</a>' . $separator;


        if (is_single()) { // записи

            the_category(', ');
            echo $separator;
            the_title();
        } elseif (is_page()) { // страницы WordPress 

            the_title();

        } elseif (is_category()) {

            single_cat_title();
        } elseif (is_post_type_archive('shops')){
            echo 'Магазины и бренды';

        } elseif (is_post_type_archive('sales')){
            echo 'Акции';

        } elseif (is_post_type_archive('food')){
            echo 'Еда';

        } elseif (is_page('news')){
            echo 'Новости';

        }elseif (is_tag()) {

            single_tag_title();
        } elseif (is_day()) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');
        } elseif (is_month()) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');
        } elseif (is_year()) { // архивы (по годам)

            echo get_the_time('Y');
        } elseif (is_author()) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;
        } elseif (is_404()) { // если страницы не существует

            echo 'Ошибка 404';
        }

        if ($page_num > 1) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }
    }
}
