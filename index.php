<?php get_header(); ?>

<div class="container-fluid banner <?php echo getRandomBannerClass(); ?>">
</div>

<?php
function getRandomBannerClass() {
  $randomNumber = rand(1, 10);
  $className = 'banner' . $randomNumber;
  return $className;
}
?>

<div class="container py-4">
    <div class="row">
      <div class="col-md-8 pb-4">

        <h1 class="display-1">Welcome to my Space!</h1>
        <h2 class="display-6"><b>Noah Studio</b> develops a wide range of visual projects, 
          always valuing creativity and innovation. Since 2013 contributing to the preaching 
          of the gospel and the restoration of moral values.</h2>

      </div>
      <div class="col-md-4 pb-4">

        <h1 class="display-4">For what I stand up for ↓</h1>
        <h5 class="pt-4"><b>Values</b></h5>
        <p>I have a duty to promote Christian religious values in the family and society. 
          My worldview is traditional, respecting all cultures, races, ethnicities, ages, and social classes.</p>
        <h5 class="pt-4"><b>The Three Angels Messages</b></h5>
        <p>My main goal is to give visual support to empower the last generation of Christians. 
          Keeping watching what our Lord Jesus told us in Matthew 24, and promoting the last 
          three message to the human race found in Revelation 14.</p>

      </div>
    </div>
</div>


<div class="container-fluid bg-light">

    <div class="container pt-5">

      <h1 class="display-4">What I do</h1>

      <div class="row text-center py-5 opacityhigh">
        <div class="col-md-3 p-2">
          <div class="p-2">
            <a href="/illustration/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/illustration.png'); ?>" alt="Illustration" class="img-fluid rounded-circle"></a>
          </div>
          <h4>Illustration</h4>
          <p>Still images for your videos, web, or printing. Original Art signed by Noah Miller.</p>
        </div>
        <div class="col-md-3 p-2">
          <div class="p-2">
            <a href="/animation/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/animation.png'); ?>" alt="animation" class="img-fluid rounded-circle"></a>
          </div>
          <h4>Animation</h4>
          <p>High-resolution animation, 2D and 3D. Meticulously crafted with expert composition and refined post-production techniques.</p>
        </div>
        <div class="col-md-3 p-2">
          <div class="p-2">
            <a href="/design/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/design.png'); ?>" alt="design" class="img-fluid rounded-circle"></a>
          </div>
          <h4>Design</h4>
          <p>Noah Studio also offers Logo and Poster Design for your Movie or Serie.</p>
        </div>
        <div class="col-md-3 p-2">
          <div class="p-2">
            <a href="/books/"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/books.png'); ?>" alt="books" class="img-fluid rounded-circle"></a>
          </div>
          <h4>Books</h4>
          <p>The Amazing Stories of Maple & Siam, among other original books. (Coming Soon)</p>      
        </div>
      </div>

    </div>

</div>

<?php get_footer();