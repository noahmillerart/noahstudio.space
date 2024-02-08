
  <div class="container-fluid border-top text-center" id="footer"><!--Footer-->

      <div class="container p-5">
      
          <img src="<?php echo esc_url(get_template_directory_uri() . '/img/LogoNS_smaller_white.png'); ?>" alt="Noah Studio">

          <p class="p-2">Noah Studio / 2024</p>

        <ul class="list-inline opacity">
          <li class="p-1 list-inline-item"><a href="<?php $siteURL = home_url(); echo $siteURL; ?>/">Home</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(6); ?>">About</a></li>
          <li class="p-1 list-inline-item"><a href="https://noahmiller.art" target="_blank" rel="noopener">Blog</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(8); ?>">Contact</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(55); ?>">Store</a></li>
        </ul>

        <ul class="list-inline opacity">
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(49); ?>">Illustration</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(51); ?>">Animation</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(53); ?>">Design</a></li>
          <li class="p-1 list-inline-item"><a href="<?php echo get_permalink(57); ?>">Books</a></li>
        </ul>

        <div class="container-fluid text-center pt-4 opacity">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://twitter.com/NoahStudioArt" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/twitter.png'); ?>" alt="Twitter" class="img-fluid s25"></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/noahstudio.space" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram.png'); ?>" alt="Instagram" class="img-fluid s25"></a></li>
            <li class="list-inline-item"><a href="https://www.linkedin.com/company/noahstudio" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/linkedin.png'); ?>" alt="LinkedIn" class="img-fluid s25"></a></li>
            <li class="list-inline-item"><a href="https://www.behance.net/noahstudioart" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/behance.png'); ?>" alt="Behance" class="img-fluid s25"></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/@NoahStudioArt" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/youtube.png'); ?>" alt="Youtube" class="img-fluid s25"></a></li>
            <li class="list-inline-item"><a href="https://sketchfab.com/noahstudio" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/sketchfab.png'); ?>" alt="Sketchfab" class="img-fluid s25"></a></li>
          </ul>
        </div>
          
      </div>

  </div><!--End Footer-->

  <?php wp_footer(); ?>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>