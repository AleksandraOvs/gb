<section class="section-hero">
    <div class="fixed-container">
        <?php
        if ($hero_slides = carbon_get_theme_option('hero-slides')) {
        ?>
            <div class="hero-slider swiper">
                <div class="swiper-wrapper hero-slider__wrapper">
                    <?php
                    //echo '<pre>';
                    //print_r ($hero_slides); 
                    ?>

                    <?php
                    foreach ($hero_slides as $hero_slide) {

                        $hero_img_url = wp_get_attachment_image_url($hero_slide['crb_hero-image'], 'full');
                    ?>
                        <?php
                        //echo '<pre>';
                        //print_r($hero_img_url);

                        ?>
                        <div class="swiper-slide hero-slider__slide">
                            <img class="hero-slider__slide__img" src="<?php echo $hero_img_url ?>" alt="">
                        </div>
                    <?php
                    }
                    ?>


                </div>

                <div class="hero-slider__wrapper__content">
                    <a href="#" class="button fill">Оставить заявку</a>
                </div>

            </div>
        <?php
        }
        ?>

        <div class="hero-slider__button-prev">
            <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6398 1.02694C17.4534 1.84053 17.4534 3.15963 16.6398 3.97322L5.61294 15.0001L16.6398 26.0269C17.4534 26.8405 17.4534 28.1596 16.6398 28.9732C15.8262 29.7868 14.5071 29.7868 13.6935 28.9732L1.19353 16.4732C0.379936 15.6596 0.379936 14.3405 1.19353 13.5269L13.6935 1.02694C14.5071 0.21335 15.8262 0.21335 16.6398 1.02694Z" fill="#212121" />
            </svg>

        </div>
        <div class="hero-slider__button-next">
            <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.36019 28.9731C0.546602 28.1595 0.546602 26.8404 1.36019 26.0268L12.3871 14.9999L1.36019 3.97306C0.546601 3.15946 0.546601 1.84037 1.36019 1.02678C2.17379 0.213185 3.49288 0.213185 4.30647 1.02678L16.8065 13.5268C17.6201 14.3404 17.6201 15.6595 16.8065 16.4731L4.30647 28.9731C3.49288 29.7866 2.17379 29.7866 1.36019 28.9731Z" fill="#212121" />
            </svg>

        </div>

    </div>
</section>