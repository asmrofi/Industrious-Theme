 <!-- Banner -->
 <section id="banner">
     <div class="inner">
         <h1>
             <?php
                global $industrious;
                echo wp_kses_post($industrious['banner-title']);
            ?>
         </h1>
         <p>
             <?php
                global $industrious;
                echo wp_kses_post($industrious['banner-description']);
            ?>
         </p>
     </div>
     <video autoplay loop muted playsinline src="<?php echo get_template_directory_uri().'/images/banner.mp4';?>"></video>
 </section>
