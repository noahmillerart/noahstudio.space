<div class="container-md">
    <div class="row">
        <div class="col-md-8 pb-5">

            <div class="text-center">
                <h1 class="display-6">Get in Touch</h1>
            </div>

            <form id="my-form" action="https://formspree.io/f/xgebjzdn" method="POST">

                <div class="p-2">
                  <span class="p-2"><b>First Name:</b></span>
                  <input type="text" name="firstname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="p-2">
                  <span class="p-2"><b>Last Name:</b></span>
                  <input type="text" name="lastname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
    
                <div class="p-2">
                  <span  class="p-2"><b>E-mail:</b></span>
                  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
    
                <div class="p-2">
                  <span class="p-2"><b>Message:</b></span>
                  <textarea class="form-control" name="message" placeholder="Enter your message" rows="5"></textarea>
                </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end p-2 ido">
                <button type="submit" id="my-form-button" class="btn btn-secondary btn-sm">Submit</button>
              </div>
  
              <h1 class="display-6 p-2 text-center" id="my-form-status"></h1>
  
            </form>

            <?php
            if ($post) {
                echo apply_filters('the_content', $post->post_content);
            } else {
                echo 'No post found';
            }
            ?>
            
        </div>
        <div class="col-md-4 text-center pb-5">
            <p>Please complete the form beside or send an email to <b>noahmiller.art[at]gmail.com</b></p>
            <hr>
            <p>Follow Noah Studio on Social Media</p>
            <ul class="list-inline opacity">
                <li class="list-inline-item"><a href="https://twitter.com/NoahStudioArt" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/twitter_b.png'); ?>" alt="Twitter" class="img-fluid s25"></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/noahstudio.space" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram_b.png'); ?>" alt="Instagram" class="img-fluid s25"></a></li>
                <li class="list-inline-item"><a href="https://www.linkedin.com/company/noahstudio" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/linkedin_b.png'); ?>" alt="LinkedIn" class="img-fluid s25"></a></li>
                <li class="list-inline-item"><a href="https://www.behance.net/noahstudioart" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/behance_b.png'); ?>" alt="Behance" class="img-fluid s25"></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/@NoahStudioArt" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/youtube_b.png'); ?>" alt="Youtube" class="img-fluid s25"></a></li>
                <li class="list-inline-item"><a href="https://sketchfab.com/noahstudio" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/sketchfab_b.png'); ?>" alt="Sketchfab" class="img-fluid s25"></a></li>
            </ul>
            <hr>
            <p>São Paulo - Brazil</p>
        </div>
    </div>
</div>

<script>
    var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Thanks for your contact!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
  </script>