<div id="preloader-container">
  <div id="container">
  <?php 
      $args = array(
        'post_type' => 'post',
        'nopaging' => 'true',
        'orderby' => 'name',
        'order' => 'ASC',
      );

      $query = new WP_Query($args);

      if($query->have_posts()){
        while($query->have_posts()){
          $query->the_post();
          
        
    ?>

    <div class="widget portfolio graphics homepage">
        <div class="entry-container span4">
        
          <!-- Portfolio Image -->
          <?php if (has_post_thumbnail()) { ?>

            <div class="entry-image">
              <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
                <span class="entry-image-overlay"></span>
                <?php the_post_thumbnail() ?>
              </a>
            </div>
          <?php
            } else {

            }
          ?>
               
            <div class="entry drop-shadow curved ">
            
              <!-- Portfolio Heading -->
              <h5 class="heading">
                <a href="portfolio-single.html">              
                  <?php echo '<h1>'.get_the_title().'</h1>'; ?>
                </a>
              </h5>
              
              <!-- Portfolio Description -->
              <p>
                <?php the_excerpt() ?>
                <?php the_category(); ?> 
              </p>
            
            <div class="entry-footer">
              <ul>
                <li class="left">وب سایت - گرافیک</li>
                <li class="right no-margin"><div class="icon like"></div> 3</li>
          
              </ul>
            </div>
                
               <div class="stripes"></div>
          </div>      
        </div>
      </div>
    <?php
      } 
    }
    ?>
  </div>
</div>