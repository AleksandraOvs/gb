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

<div class="page-container">

       
    <section class="site-page" style="padding-top:140px;" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
         <!-- <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php //the_title(); ?> </h2>
            </div>
        </div> -->
        <div class="fixed-container">
        <?php if (is_search() ): ?>
                
                    <h1>Результаты поиска по запросу: &laquo;<?php the_search_query()?>&raquo;</h1>
              
            <?php endif; ?>

            <?php if(have_posts()) : ?>
              <div class="posts__grid">
                <?php 
              while(have_posts() ) : the_post();

                    get_template_part('templates/entry-content');

            endwhile;
            ?>
              </div>
              
             
                <div class="pagination">
                  <?php
                      echo paginate_links(array(
                          'prev_next' => true,
                          'prev_text' => __('<i class="icon arrow_carrot-left"></i>>'),
                          'next_text' => __('<i class="icon arrow_carrot-right"></i>>'),
                      ));
                  ?>

                </div>
              
                    <?php else: ?>
                        <p>По вашему запросу ничего не найдено</p>
                      <?php endif; ?>
        </div>


    </section>
 
</div>




<?php
get_footer();
