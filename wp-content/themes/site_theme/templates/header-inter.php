<?php
  /**
   * Site 'Header'
   *
   * @package WordPress
   * @subpackage Site
   * @since CGR 1.0
   */

?>
<!--<div class="preload" id="container">
    <aside class="home__intro animated zoomIn">
        <div class="home__intro__logo">
            <svg class="logo_large logo_large-dism" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="95px" height="94px">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M61.172,56.469 C61.173,56.157 61.173,55.841 61.173,55.520 C61.173,42.707 60.556,36.242 53.149,36.242 C49.231,36.242 47.214,38.052 46.182,41.652 L35.063,30.661 C38.860,27.268 44.575,25.259 53.149,25.259 C76.109,25.259 78.577,39.658 78.577,56.494 C78.577,62.403 78.298,67.771 77.265,72.377 L61.172,56.469 ZM42.534,17.450 L53.643,0.003 L70.308,0.003 L50.558,17.450 L42.534,17.450 ZM92.678,94.002 L-0.000,2.393 L2.320,0.100 L94.997,91.709 L92.678,94.002 Z"/>
            </svg>
            <span id="eco" class="overlay"></span>
        </div>
    </aside>
    <aside class="animated zoomIn ">
        <div class="middle logo_min animated zoomIn"></div>
    </aside>
</div>-->
<header class="inter">
<div class="head">
    <div class="container">
        <div class="row text-right">
            <div class="col-12">
                <ul class="head-social_list">
                    <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><span class="social fb"></span></a></li>
                    <li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><span class="social in"></span></a></li>
                    <li><a href="<?php the_field('blog', 'option'); ?>" target="_blank"><span class="badge badge-secondary">Blog</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand text-white" href="<?php echo( get_home_url());?>">
            <?php
                $image = get_field('logo_white', 'option');
            if(!empty($image)):?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300">
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']);
            endif;
          ?>
        </div>
    </div>
</nav>
</header>