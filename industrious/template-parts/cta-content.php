 <!-- CTA -->
 <section id="cta" class="wrapper">
     <div class="inner">
         <h2>
             <?php
                    global $industrious;
                    echo wp_kses_post($industrious['cta-title']);
                ?>
         </h2>
         <p>
             <?php
                    global $industrious;
                    echo wp_kses_post($industrious['cta-description']);
                ?>
         </p>
     </div>
 </section>
