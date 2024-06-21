
    <a href="<?php the_permalink() ?>" class="post-thumbnail">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
        } else {
            echo '<img class="post-thumbnail" src="' . get_bloginfo("template_url") . '/images/svg/placeholder.svg" />';
        }
        ?>
    </a>

    <p class="post-title"><?php the_title() ?></p>
    <a href="<?php the_permalink() ?>" class="read-post">Читать полностью</a>
    </a>
