<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage BlueSky Fiji
 */

get_header(); ?>

      <!-- Main Section -->
  
      <div id="main-section" class="row">

         <div id="main-content" class="bk-img">
           <div class="container">
             <div id="main-content">
               <div id="main-logo"><a href="#book-your-package"><img src="<?php bloginfo( 'template_url' ); ?>/img/main-logo.png" width="100%" alt=""></a></div>
               <div id="main-event"><?php echo the_secondary_content( 'Event Date', 2 ); ?></div>
               <div id="main-video">The best weekend of your life!&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" id="play-video"><img src="<?php bloginfo( 'template_url' ); ?>/img/ico-video.png" width="72" height="51" alt="" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;WATCH THE TRAILER</div>
             </div>
           </div>
         </div>


         <div id="people-comments">
           <div class="container">
             <div id="main-people-pics">
               <div class="media col-lg-3 col-md-3 col-sm-12 col-xm-12"><img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-01.jpg" width="100%" alt="">
                 <img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-02.jpg" width="100%" alt="">
                 <img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-03.jpg" width="100%" alt="">
                 <img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-04.jpg" width="100%" alt="">
               </div>
             </div>

             <div id="main-people-comments">
               <div class="testimonial col-lg-6 col-md-6 col-sm-12 col-xm-12">
                 <img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-testimonial-01.jpg" width="129" height="129" alt="" class="img-circle">
                 <div id="info-box" class="col-lg-6 col-md-6 col-sm-12 col-xm-12 info-box">
                  <strong>"Insainely fun. Can not wait for the next one!!"</strong><br />Jane Dowe
                 </div>
               </div>

               <div class="testimonial col-lg-6 col-md-6 col-sm-12 col-xm-12">
                 <img src="<?php bloginfo( 'template_url' ); ?>/img/main-people-pic-testimonial-02.jpg" width="129" height="129" alt="" class="img-circle">
                  <div id="info-box" class="col-lg-6 col-md-6 col-sm-12 col-xm-12 info-box">
                    <strong>"Amazing party, amazing experience. Best trip ever!"</strong><br />James Appleseed
                 </div>
               </div>
             </div>
         </div>
        

      </div>

      <div id="bluesky-experience-section" class="row">
        <div class="container">
          <div id="experience-content">
             <?php the_secondary_content( 'Experience', 2 ); ?>

          </div>
        </div>
      </div>


    <div id="experience-people-pics">
      <div class="media template col-lg-3 col-md-3 col-sm-12 col-xm-12"><img src="<?php bloginfo( 'template_url' ); ?>/img/experience-people-pic-01.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/experience-people-pic-02.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/experience-people-pic-03.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/experience-people-pic-04.jpg" width="100%" alt="">

      </div>
    </div>

          <!-- End of Blue Sky Experience Section -->

              <!-- Entertainment Section -->

    <div id="entertainment-section" class="row">
     <div class="container">
      <div id="entertainment-content">
        <?php the_secondary_content( 'Entertainment', 2 ); ?>
      </div>
     </div>
    </div>

     <div id="entertainment-people-pics">
       <div class="media template col-lg-3 col-md-3 col-sm-12 col-xm-12"><img src="<?php bloginfo( 'template_url' ); ?>/img/entertainment-pic-01.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/entertainment-pic-02.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/entertainment-pic-03.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/entertainment-pic-04.jpg" width="100%" alt="">
       </div>
     </div>

          <!-- End of Entertainment Section -->
      
                 <!-- Extra Section -->

     <div id="extra-section" class="row clear">
      <div class="container">
        <div id="extra-content">
          <?php the_secondary_content( 'Activity', 2 ); ?>

        </div>
      </div>
     </div>

     <div id="extra-people-pics">
      <div class="media template col-lg-3 col-md-3 col-sm-12 col-xm-12"><img src="<?php bloginfo( 'template_url' ); ?>/img/extra-pic-01.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/extra-pic-02.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/extra-pic-03.jpg" width="100%" alt="">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/extra-pic-04.jpg" width="100%" alt=""></div>
      </div>

          <!-- End of Extra Section -->

         <!-- Book your package section -->
      <div id="book-your-package" class="row">
          <div class="container">
            <?php the_secondary_content( 'Package', 2 ); ?>
            <ul>
              <?php

              query_posts( 'cat=1' );
		      if (have_posts()) : while (have_posts()) : the_post();

		      ?>
           <li>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xm-7">
              <h2><?php echo get_the_title(); ?></h2>
              <p><?php echo get_the_excerpt(); ?></p>
            </div>


            <div class="col-lg-5 col-md-5 col-sm-5 col-xm-5 package-buttons">
              <p class="booking-price"> <?php echo get_post_meta(get_the_id(), 'Price', true); ?></p>
              <p><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/btn-info.jpg" width="99" height="52" alt=""></a></p>
              <p><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/btn-booknow.jpg" width="165" height="51" alt=""></a></p>
            </div>
           </li>
           <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </ul>
          </div>
      </div>
      <!-- End of book your package section -->

<?php get_footer(); ?>      