<?php
get_header();

global $post;
$page_slug = $post->post_name;

if ($page_slug == 'about') {
    get_template_part('about');
} elseif ($page_slug == 'contact') {
    get_template_part('contact');
} elseif ($page_slug == 'illustration') {
    get_template_part('illustration');
} elseif ($page_slug == 'animation') {
    get_template_part('animation');
} elseif ($page_slug == 'design') {
    get_template_part('design');
} elseif ($page_slug == 'books') {
    get_template_part('books');
} elseif ($page_slug == 'store') {
    get_template_part('store');
} else {
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
    endwhile;
}

get_footer();