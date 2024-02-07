<div class="container-md">

    <div class="row pb-5">
        <div class="col-md-8">
            <?php the_content(); ?>
        </div>
        <div class="col-md-4">
            <?php the_post_thumbnail('', array('class' => 'img-fluid rounded')); ?>

            <ul class="list-inline opacity">
                <li class="list-inline-item s25 pt-2">
                  <a href="https://www.linkedin.com/in/brunotribst" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/linkedin_b.png'); ?>" alt="LinkedIn" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="https://www.behance.net/noahmillerart" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/behance_b.png'); ?>" alt="Behance" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="https://www.fiverr.com/noahstudioart" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/fiverr_b.png'); ?>" alt="Fiverr" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="https://www.instagram.com/noahmiller.art" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram_b.png'); ?>" alt="Instagram" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="https://twitter.com/NoahMillerArt" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/twitter_b.png'); ?>" alt="Twitter" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="https://noahmiller.art" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog.png'); ?>" alt="Blog" class="img-fluid"></a>
                </li>
                <li class="list-inline-item s25 pt-2">
                  <a href="../downloads/Curriculum_2024_BPT.pdf" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/cv.png'); ?>" alt="CV" class="img-fluid"></a>
                </li>
            </ul>

        </div>
    </div>

    <hr>

    <div class="container-fluid">
        <?php get_template_part('testimonials'); ?>
    </div>

</div>

    <?php get_template_part('skills'); ?>

    <?php get_template_part('clients'); ?>