<header class="header">
  <div class="container">
      <!-- Start Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-0">

                  <!-- navbar brand-->
                  <a href="/">
                    {{-- <img src="./img/logo/logo.png" alt="logo"> --}}
                    
                    @php
                      if ( function_exists( 'the_custom_logo' ) ) {
                          the_custom_logo();
                      }
                    @endphp
                  </a>
                  <!-- navbar toggler-->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavbar">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- navbar collapse-->
                  <div class="navbar-collapse collapse" id="MyNavbar">
                      {{-- <ul class="navbar-nav mt-3 ml-lg-auto">
                          <li class="nav-item mr-3"><a class="nav-link" href="#">Home</a></li>
                          <li class="nav-item mr-3"><a class="nav-link" href="#">Service</a></li>
                          <li class="nav-item mr-3"><a class="nav-link" href="#">Team</a></li>
                          <li class="nav-item mr-3"><a class="nav-link" href="#">Blog</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                      </ul> --}}
                      <ul class="navbar-nav mr-auto">

                      </ul>
                      @php
                        function add_class_li($classes, $item, $args){
                          if(isset($args->li_class)){
                            $classes[] = $args->li_class;
                          }
                          if(isset($args->active_class) && in_array('current-menu-item', $classes)){
                            $classes[] = $args->active_class;
                          }
                          return $classes;
                        }
                        add_filter( 'nav_menu_css_class', 'add_class_li', 10, 3);
                        function add_anchor_class($attr, $item, $args){
                          if(isset($args->a_class)){
                            $attr['class'] = $args->a_class;
                          }
                          return $attr;
                        }
                        add_filter( 'nav_menu_link_attributes', 'add_anchor_class', 10, 3);
                      @endphp
                      @if (has_nav_menu('primary_navigation'))
                          {!! wp_nav_menu([
                            'theme_location' => 'primary_navigation', 
                            'menu_class' => 'navbar-nav ml-lg-auto',
                            'li_class' => 'nav-item mr-3',
                            'a_class' => 'nav-link',
                            'active_class' => 'active'
                          ]) !!}
                      @endif
                  </div>
          </nav>
      <!-- End Navbar -->
      <!-- Start Header Content-->
          <div class="header-content text-center text-md-left">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="header-content-text mx-auto mb-3">
                          <h2 class="h1">Get busiess solution with Noren.</h2>
                          <p>Power your business to new heights with our award-winning digital marketing services and technology platform</p>
                          <button type="button"><span>Get Started</span></button>
                      </div>
                      
                  </div>
                  <div class="col-lg-6 d-none d-md-block">
                      <div class="box-img mx-auto">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>
                  </div>
              </div>
          </div>
      <!-- End Header Content -->
  </div>
</header>


