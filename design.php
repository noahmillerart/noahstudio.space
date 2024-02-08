<div class="container-md">
    <div class="row">

        <div class="col-md-8">

            <ul class="list-inline opacityhigh text-center">
                <?php $category_id = 'design';
                
                $args = array(
                    'category_name' => $category_id,
                    'posts_per_page' => -1 
                );
        
                $query = new WP_Query($args);
        
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    
                        <li class="list-inline-item mb-2">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('', array('class' => 'img-fluid rounded s120'));
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/default-thumbnail.jpg" class="img-fluid" alt="Thumbnail">';
                                }
                                ?>
                                
                            </a>
                        </li>
                    
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No posts found in this category.';
                endif; ?>  
            </ul>

        </div> <!--End col-md-8-->

        <div class="col-md-4 mb-5">

            <div class="p-4 text-center ido card bg-light">
                <h1 class="display-6 pb-2">I design your ideas!</h1>
                <p>Logo and Posters for your Movie or Serie.</p>
                <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='<?php echo get_permalink(8); ?>'">Send a request</button>
            </div>

        </div>
    </div>
</div>