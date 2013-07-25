<!-- Le Header
================================================== -->
<!-- This is the logo and navigation -->
<?php

  // $all_categories = get_categories( $args );
  // $args = array(
  //   'type' => 'post',
  //   'orderby' => 'name',
  //   'order' => 'ASC',
  //   'hide_empty' => True
  // );

  $taxonomies = array('type');

  $args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => True
  );

  $all_types = get_terms( $taxonomies, $args );
?>

	<div class="navigation">
		<nav>
			
			<!-- Slap your MOBILE logo here -->
			<a class="mobile-logo" data-toggle="collapse" data-target="#nav-collapse">
				<span>یک تجربه</span>
			</a>
			
			<!-- NAVIGATION
			================================================== -->
			<!-- Navigation begins here -->
			<?php
          // wp_nav_menu(array(
          //   'theme_location'  => 'mainmenu',
          //   'container'       => 'div', 
          //   'container_class' => 'collapse',
          //   'container_id'    => 'nav-collapse',
          //   'menu_class'      => 'nav', 
           // 'before'          => '',
           // 'after'           => '<span>describe the page</span>'
           // 'link_before'     => '',
           // 'link_after'      => ''
          //));
        ?>
			<div id="nav-collapse" class="collapse">
				<ul class="nav">
				
					<li class="logo"><a>یک تجربه</a></li>
					
					<li>
						<a href="#filter=.portfolio" class="selected"><span data-toggle="collapse" data-target="#portfolio-collapse"></span>نمونه کارها</a>
						<ul id="portfolio-collapse" class="collapse out">
              <?php 
                foreach($all_types as $type) {
                  echo "<li><a href='#filter=.GH_$type->slug'> $type->name </a></li>";
                } 
               ?>
							<!-- <li><a href="#filter=.graphics">گرافیک</a></li>
							<li><a href="#filter=.illustration">وب سایت</a></li>
							<li><a href="#filter=.web">موبایل</a></li> -->
						</ul>
					</li>
					
					<li><a href="#filter=.blog">بلاگ</a></li>
					
					<li>
						<a href="#filter=.grid-widget">ویدجت</a>
					</li>
					
					<li>
						<a href="#filter=.shortcodes">المنت ها</a>
					</li>
					
					<li>
						<a><span data-toggle="collapse" data-target="#pages-collapse"></span>صفحات</a>
						<ul id="pages-collapse" class="collapse out">
							<li><a href="#filter=.page-about">درباره</a></li>
							<li><a href="#filter=.page-team">تیم</a></li>
							<li><a href="#filter=.page-contact">ارتباط</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>	 
		<div class="nav-arrow">
		</div>
	</div>