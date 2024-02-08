<div class="col-md-4 mb-5">
    <?php
    $args = array(
        'category_name'   => 'animation',
        'posts_per_page'  => -1
    );

    $query = new WP_Query($args);
    ?>

    <h2 class="display-6">Animations</h2>
    <hr>

    <ul class="list-inline desaturated">
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                // Define the default class for thumbnails
                $thumbnail_class = 'img-fluid s100 m-2 rounded opacity04';
                
                // Check if the current post in the loop matches the post being viewed
                if (is_single() && get_queried_object_id() == get_the_ID()) {
                    // Add 'rounded' class for the active post's thumbnail
                    $thumbnail_class .= ' rounded opacity1';
                }
                ?>

                <li class="list-inline-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('', array('class' => $thumbnail_class));
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/default-thumbnail.jpg" class="' . $thumbnail_class . '" alt="Thumbnail">';
                        }
                        ?>
                    </a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No posts found in this category.</p>
        <?php endif; ?>
    </ul>
</div><!-- End col-md-4 -->