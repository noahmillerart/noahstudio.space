<?php get_header(); ?>

<div class="container-md">

    <div class="row">
        <div class="col-md-8 mb-5">
            <?php
            if ($post) {
                echo apply_filters('the_content', $post->post_content);
            } else {
                echo 'No post found';
            }
            ?>

            <div class="container-fluid text-center mt-5 p-2" id="backtop">
                <p><a href="#header">▲ Back to the top ▲</a></p>
            </div>

        </div>

<?php
if (has_category('illustration')) :
?>

    <?php get_template_part('sidebar_illustration'); ?>

<?php

elseif (has_category('design')) :
?>

    <?php get_template_part('sidebar_design'); ?>

<?php
elseif (has_category('animation')) :
?>

    <?php get_template_part('sidebar_animation'); ?>

<?php
endif; // End category check
?>

    </div>
</div>

<?php get_footer();