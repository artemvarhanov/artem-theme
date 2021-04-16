<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
        
    </head>
<body>
    <div class="clearfix site-wrapperr">
        <div class="header-announcement-bar-wrapper">
            <div class="header-title-nav-wrapper">
                <div class="logo"><?php echo the_custom_logo(); ?></div>
                <div class="header-nav-list">
                  <?php wp_nav_menu( [ 'menu' => 'header-menu' ] ); ?>
                   
                </div>
                
            </div>

            
            <button class="burger">
                <div class="burger-box">
                  <div class="burger-inner">
                    <div class="top-bun"></div>
                    <div class="bottom-bun"></div>
                  </div>
                </div>
              </button>
              <div class="header-menu-nav-folder-content">
                <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
                  <a href="/"><span class="visually-hidden"></span>Home</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="/about-us/">About us</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="#"> How does it work?</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="#">Pricing</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="#">FAQ</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="#">Careers</a>
                </div>
                <div class="container header-menu-nav-item header-menu-nav-item--collection">
                  <a href="#">Blog</a>
                </div>
              </div>
        </div>
