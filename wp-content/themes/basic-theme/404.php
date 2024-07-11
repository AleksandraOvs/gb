<?php
get_header(); ?>

<section class="basic-page">
    <div class="fixed-container">

        <div class="basic-page__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
           
        </div>

        <div class="page-content">
           
            <div class="error-404">
                <h2>Такой страницы не существует</h2>
                <p>404</p>
                <a class="button fill" href="<?php echo site_url() ?>" class="error-404__link">Перейти на главную страницу</a>
            </div>
        </div>

    </div>
</section>


<?php
get_footer();
