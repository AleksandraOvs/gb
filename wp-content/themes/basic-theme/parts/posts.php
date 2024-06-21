<?php
$posts_query = new WP_Query(array(
    //'post_type' => 'shops',
    'order' => 'DESC',
    'posts_per_page' => 4,
    'publish' => true
));

if ($posts_query->have_posts()) {
?>
    <ul class="posts-list">
        <?php
        while ($posts_query->have_posts()) : $posts_query->the_post();
        ?>
            <li class="posts-list__item">
                <?php get_template_part('parts/post-item') ?>
            </li>

        <?php
        endwhile;
        ?>
    </ul>
<?php
    wp_reset_postdata();
}else {
    echo '<p style="margin-top: 15%; margin-bottom: 15%; text-align: center; font-size: 30px;">Записей не найдено</p>';
}
?>
