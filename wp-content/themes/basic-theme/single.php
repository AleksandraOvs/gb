<?php get_header() ?>
<section class="basic-page">
    <div class="fixed-container">
        <div class="basic-page__header">
            <h2><?php the_title() ?></h2>
        </div>

        <div class="basic-page__content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer() ?>,