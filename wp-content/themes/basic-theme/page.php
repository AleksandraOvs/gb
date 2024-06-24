<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<section class="basic-page">
    <div class="fixed-container">

        <div class="basic-page__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
            <h2><?php the_title() ?></h2>
        </div>

        <div class="page-content">
            <?php the_content() ?>
        </div>




        
    </div>
</section>


<?php
get_footer();
