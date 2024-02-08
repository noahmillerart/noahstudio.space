<div class="container-md">
    <div class="row">
        <div class="col-md-8">
            <?php
            if ($post) {
                echo apply_filters('the_content', $post->post_content);
            } else {
                echo 'No post found';
            }
            ?>
        </div>
        <div class="col-md-4 mb-5">

            <div class="p-4 text-center card bg-light">
                <h1 class="display-6 pb-2">Original Novels</h1>
                <p>The Amazing Stories of Maple & Siam and other titles.</p>
            </div>

        </div>
    </div>
</div>