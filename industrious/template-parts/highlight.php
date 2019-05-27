 <!-- Highlights -->
 <section class="wrapper">
     <div class="inner">
         <header class="special">
             <h2>
                 <?php
                    global $industrious;
                    echo wp_kses_post($industrious['hl-title']);
                ?>
             </h2>
             <p>
                 <?php
                    global $industrious;
                    echo wp_kses_post($industrious['hl-description']);
                ?>
             </p>
         </header>
         <div class="highlights" <?php post_class(); ?>>
             <?php
                $args=array('post_type'=>'highlights');
                $speakers =new WP_Query($args);
                  while($speakers->have_posts()):$speakers->the_post()
            ?>
             <section>
                 <div class="content">
                     <header>
                         <a href="<?php the_permalink();?>" class="icon <?php
                                                    $icon = get_post_meta(get_the_ID() , 'hicon', true);
                                                    echo wp_kses_post($icon);
                                                ?>"><span class="label">Icon</span></a>
                         <h3><?php the_title();?></h3>
                     </header>
                     <p><?php the_content();?></p>
                 </div>
             </section>
             <?php endwhile; ?>
         </div>
     </div>
 </section>
