 <!-- Testimonials -->
 <section class="wrapper">
     <div class="inner">
         <header class="special">
             <h2>
                 <?php
                    global $industrious;
                    echo wp_kses_post($industrious['test-title']);
                ?>
             </h2>
             <p>
                 <?php
                    global $industrious;
                    echo wp_kses_post($industrious['test-description']);
                ?>
             </p>
         </header>
         <div class="testimonials" <?php post_class(); ?>>
             <?php
                $args=array('post_type'=>'testimonial');
                $speakers =new WP_Query($args);
                  while($speakers->have_posts()):$speakers->the_post()
            ?>
             <section>
                 <div class="content">
                     <blockquote>
                         <p><?php the_content();?></p>
                     </blockquote>
                     <div class="author">
                         <div class="image">
                             <a href="<?php the_permalink();?>">
                                 <img src="<?php
                                            $authori = get_post_meta(get_the_ID() , 'aimage', true);
                                            echo wp_kses_post($authori);
                                        ?>" alt="Author Image" /> </a>

                         </div>
                         <p class="credit">- <strong><?php the_title();?></strong> <span><?php
                                                                                $authord = get_post_meta(get_the_ID() , 'authord', true);
                                                                                echo wp_kses_post($authord);
                                                                            ?></span></p>
                     </div>
                 </div>
             </section>
             <?php endwhile; ?>
         </div>
     </div>
 </section>
