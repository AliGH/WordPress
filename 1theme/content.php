<div id="preloader-container">
  <div id="container">
  <?php 
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => '6',
        'orderby' => 'modified',
        'order' => 'ASC',
        'author_name' => 'AliGH',
      );

    $query = new WP_Query($args);

    if($query->have_posts()){
      while($query->have_posts()){
        
        $query->the_post();

        $cats = get_the_category();
        $class_name = "portfolio";
        foreach($cats as $cat) {
          $class_name  .= " " . $cat->slug;
        }

    ?>

    <div class="widget <?php echo $class_name; ?> graphics homepage">
        <div class="entry-container span4">
        
          <!-- Portfolio Image -->
          <?php if (has_post_thumbnail()) { ?>

            <div class="entry-image">
              <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
                <span class="entry-image-overlay"></span>
                <?php the_post_thumbnail(); ?>
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
                  <?php echo '<h3>'.get_the_title().'</h3>'; ?>
                </a>
              </h5>
              
              <!-- Portfolio Description -->
              <p>
                <?php the_content(); ?>
                <?php the_author(); ?>
                <?php the_tags(); ?>
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