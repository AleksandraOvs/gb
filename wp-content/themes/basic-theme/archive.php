<?php get_header(); ?>
<section class="basic-page">
    <div class="fixed-container">

        <div class="basic-page__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
            <h2><?php the_title() ?></h2>
        </div>


        <?php

        $args = array(
            'posts_per_page' => 9,
            'publish' => true
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) {
        ?>
            <ul class="posts-list">
                <?php
                while ($query->have_posts()) : $query->the_post();
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
        } else {
            echo '<p style="margin-top: 15%; margin-bottom: 15%; text-align: center; font-size: 30px;">Записей не найдено</p>';
        }
        ?>
    </div>
</section>





<?php
get_footer();
