<?php get_header() ?>

<section class="maintenance-page">
    <div class="fixed-container">
        <div class="maintenance-header">
        <div class="mheader-logo">

        </div>
        <div class="mheader-links">

        </div>
    </div>

    <div class="maintenance-content">
        <p class="maintenance-text">Наш сайт на ремонте и заработает в ближайшее время. Вы можете ознакомиться с ассортиментом в каталоге или направить запрос менеджеру</p>
        <div class="maintenance-form">
            <?php echo do_shortcode('[contact-form-7 id="ca000b2" title="Контактная форма 1"]')?>
        </div>
    </div>
    </div>

    <div class="mob-contacts">

    
<?php
						if ($messengers = carbon_get_theme_option('messengers')) {
						?>
							<ul class="header__menu__messengers">
								<?php
								foreach ($messengers as $messenger) {
								?>
									<li class="social__item">
										<a href="<?php echo $messenger['crb_mes_link']; ?>" class="social__link">
											<?php
											$thumb_contact = wp_get_attachment_image_url($messenger['crb_mes_image'], 'full');
											?>
											<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $messenger['crb_mes_name']; ?>">
											<span>
												<?php echo $messenger['crb_mes_name']; ?>
											</span>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
						<?php
						}
						?>
                        </div>
    
</section>


<?php get_footer() ?>