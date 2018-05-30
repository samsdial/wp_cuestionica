<!-- ADD Intro banner -->
<div class="d-none d-sm-block banner banner-forest" style="background-image: url(<?php echo get_field('banner_courses');?>); height: 76vh;">
    <div class="container text-right">
    </div>
</div>
<div class="d-sm-none banner banner-forest" style="background-image: url(<?php echo get_field('banner_courses_movil');?>)">
    <div class="container text-right">
    </div>
</div>
<!-- END Intro banner -->



<!--
<div class="banner banner-forest" style="background-image: url(<?php echo get_field('banner_courses');?>)">
    <div class="container text-right">

    </div>
</div>
-->
<!-- Fin Intro Banner -->
<section class="courses pt-5 pb-5" style="width: 100%; display: block">
    <div class="box_title_courses deco text-right" style="width: 50%; display: inline-block;">
        <div class="title s30 cviolet bg-white f-bold pr-5">
            <?php echo get_field('titulo_clientes_curses')?>
        </div>
    </div>
</section>

<section class="list_clientes bg-white">
    <div class="container">
        <ul class="list-inline list_clientes_cours" style="padding-bottom: 0px;">
            
            
            <?php
            if( have_rows('items_clientes_curses') ):
            
            while ( have_rows('items_clientes_curses') ) : the_row();?>
                <li>
                    <a class="btn bg-white" href="<?php echo the_sub_field('url_cliente');?>" target="_blank">
                    <span class="bgi" style="background-image: url(<?php echo the_sub_field('image_cliente'); ?>)"></span>
                    </a>
                </li>
            <?php
            endwhile;
            else :
                // no rows found
            endif;
            ?>
        </ul>
    </div>
</section>
<section class="courses pt-5 pb-5 d-none" style="width: 100%; display: block">
    <div class="box_title_courses deco text-right" style="width: 50%; display: inline-block;">
        <div class="title s30 cviolet bg-white f-bold pr-5">
            <?php echo get_field('title_cursos')?>
        </div>
    </div>
</section>
<div class="container d-none">
    <div class="row pt-5 pb-5">
    <div class="col col-sm-10">
        <div class="tab-content" >
            <div id="home" class="tab-pane fade in active show" style="color: black;">
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo get_field('iframe_video_uno')?>
              </div>
            </div>
            <div id="menu1" class="tab-pane fade" style="color: black;">
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo get_field('iframe_video_dos')?>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade" style="color: black;">
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo get_field('iframe_video_tres')?>
              </div>
            </div>
            <div id="menu3" class="tab-pane fade" >
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo get_field('iframe_video_cuatro')?>
              </div>
            </div>
            <div class="title cwhite pt-3 pb-3 s30">
                <spna class="icons_courses"></spna><span class="texto text-uppercase">
                    El verdadero Cambio Ocurre
                </span>
            </div>
        </div>
    </div>
    <div class="col col-sm-2 text-center">
        <ul class="nav nav-tabs list-group">
            <li class="active">
                <a data-toggle="tab" class="mb-2" href="#home" style="display: block;">
                    <img src="<?php echo get_field('imagen_video_uno');?>" class="fluid-img" alt="">
                </a>
             </li>
            <li>
                <a data-toggle="tab" class="mb-2" href="#menu1" style="display: block;">
                    <img src="<?php echo get_field('imagen_video_dos');?>" class="fluid-img" alt="">
                </a>
            </li>
            <li>
                <a data-toggle="tab" class="mb-2" href="#menu2" style="display: block;">
                    <img src="<?php echo get_field('imagen_video_tres');?>" class="fluid-img" alt="">
                </a>
            </li>
            <li>
                <a data-toggle="tab" class="mb-2" href="#menu3" style="display: block;">
                    <img src="<?php echo get_field('imagen_video_cuatro');?>" class="fluid-img" alt="">
                </a>
            </li>
        </ul>
    </div>
  </div>
</div>
<section class="courses bg-white pt-5 pb-5 d-none" style="width: 100%; display: block">
    <div class="box_title_courses_pdf deco text-right" style="width: 35%; display: inline-block;">
        <div class="col-12 s30 cwhite bg-violet f-bold pr-5">PDF</div>
    </div>
</section>

<!-- items_pdf -->
<div class="pdf-dw pt50 pb50 bg-white d-none">
    <div class="container">
        <div class="row">
            <?php
            if( have_rows('items_pdf') ):
            
            while ( have_rows('items_pdf') ) : the_row();?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt40 s20 text-center">
                    <a href="<?php echo the_sub_field('item_pdf');?>" target="_blank" class="btn cwhite bg-blulight dwn-button" style="border-radius: 0px;"><?php echo the_sub_field('title_pdf'); ?></a>
                </div>
            <?php
            endwhile;
            else :
                // no rows found
            endif;
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.title = 'Cuestionica - Clientes';
</script>