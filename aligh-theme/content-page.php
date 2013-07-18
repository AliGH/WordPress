<section class="content">
  <?php
    while (have_posts()) {
  ?> 
    <?php the_post(); ?>
    <a class="title-link" href="<?php the_permalink() ?>"><h2><?php the_title();?></h2></a>
    <div class="clearfix"></div>
    <div class="blog-content">
      <p><?php the_content(); ?></p>
    </div>
  <?php
    } 
  ?>
</section>