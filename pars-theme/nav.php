<div class="open" id="anim">
  <div id="menu" class="left menu_wrap">
    <div class="menu">
      <div class="logo cover">
        <h1>
          <a href="index.html" >
            <span>swastika</span>
          </a>
        </h1> 
      </div>

      <nav>
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'mainmenu',
            'container'       => 'false', 
            'container_class' => '',
           // 'menu_class'      => '', 
           // 'before'          => '',
            'after'           => '<span>describe the page</span>'
           // 'link_before'     => '',
           // 'link_after'      => ''
          ));
        ?>
      </nav>

      <!-- <nav >
        <menu>
          <li>
            <a href="index.html" style="color: #fff;">
              home
              <span>back to home page</span>
            </a>
          </li>
          <li>
            <a href="#">
              examples
              <span>what we're offering</span>
            </a>
            <menu>
              <li>
                <a href="#">submenu 1st</a>
                <menu>
                  <li>
                    <a href="#">submenu 2nd</a>
                    <menu>
                      <li>
                        <a href="#">submenu 3rd</a>
                      </li>
                    </menu>
                  </li>
                </menu>
              </li>
              <li>
                <a href="typo.html">typography</a>
              </li>
              <li>
                <a href="sample.html">example page</a>
              </li>
              <li>
                <a href="#">more example</a>
                <menu>
                  <li>
                    <a href="sample.html">sample page</a>
                  </li>
                  <li>
                    <a href="pass-pro.html">password protect</a>
                  </li>
                </menu>
              </li>
            </menu>
          </li>
          <li>
            <a href="#">
              galleries
              <span>what we're proud of</span>
            </a>
            <menu>
              <li>
                <a href="#">color box</a>
                <menu>
                  <li>
                    <a href="gallerycol2.html">2 columns</a>
                  </li>
                  <li>
                    <a href="gallerycol3.html">3 columns</a>
                  </li>
                </menu>
              </li>
              <li>
                <a href="#">fancy box</a>
                <menu>
                  <li>
                    <a href="gallerycol2.html">2 columns</a>
                  </li>
                  <li>
                    <a href="gallerycol3.html">3 columns</a>
                  </li>
                </menu>
              </li>
              <li>
                <a href="galleria.html">galleria</a>
              </li>
              <li>
                <a href="#">pretty photo</a>
                <menu>
                  <li>
                    <a href="gallerycol2.html">picture 1</a>
                  </li>
                  <li>
                    <a href="gallerycol3.html">picture 2</a>
                  </li>
                </menu>
              </li>
              <li>
                <a href="sliderview.html">slider view</a>
              </li>
            </menu>
          </li>
          <li>
            <a href="#">
              portfolios
              <span>show casing our work</span>
            </a>
            <menu>
              <li>
                <a href="#">designing</a>
                <menu>
                  <li>
                    <a href="port-mode.html">2 columns</a>
                  </li>
                  <li>
                    <a href="port-mode2.html">3 columns</a>
                  </li>
                </menu>
              </li>
              <li>
                <a href="port-mode.html">photos</a>
              </li>
              <li>
                <a href="port-mode2.html">models</a>
              </li>
            </menu>
          </li>
          <li>
            <a href="blog.html">
              blog
              <span>latest news & tutorials</span>
            </a>
          </li>
          <li>
            <a href="contact-us.html">
              contact us
              <span>get in touch</span>
            </a>
          </li>
        </menu> 
      </nav> -->
    </div>
    <div class="hide">
      <a id='hideupdn' href="#">
        <img src="<?php bloginfo('template_url'); ?>/images/menu_hide_arrow_top.png" alt="hide" />
      </a>
    </div>  
  </div>
</div>