<!-- Intro banner -->
<div class="d-none d-sm-block banner banner-forest" style="background-image: url(<?php echo get_field('banner_about');?>); height: 76vh;">
    <div class="container text-right">
    </div>
</div>
<div class="d-sm-none banner banner-forest" style="background-image: url(<?php echo get_field('banner_about_movil');?>)">
    <div class="container text-right">
    </div>
</div>
<!-- Fin Intro Banner -->
<!-- Contenido --> 
<!-- EJES TEMATICOS -->
<section class="vertex_white bottom">
    <div class="ejes">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 program-content">
                    <div class="text-center program-text title_font_site">
                        <?php echo get_field('slogan')?>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 program-img">
                    <img src="<?php echo get_field('imagen_slogan');?>" alt="Programs" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN -- EJES TEMATICOS -->
<!-- team -->
<div class="team ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-sm-12 title-team mt40">
                <div class="title title_after title_after circle two">
                    <span>
                    <?php echo get_field('title_equipo')?>
                    </span>
                </div>
            </div>
            <div class="col-12 mb40">
            <ul class="list-inline js_team">
            <?php

            if( have_rows('items_equipo') ):
            
            while ( have_rows('items_equipo') ) : the_row();?>
                <li>
                    <div class="mt40 p20 text-center" style="display: block">
                        <figure class="bg-gray box-item p20">
                            <img src="<?php echo the_sub_field('image_equipo')?>" alt="" class="pt20 img-fluid">
                            <figcaption class="text-center">
                                <div class="title s20 cblack pt20">
                                    <?php echo the_sub_field('nombre_equipo'); ?>
                                </div>
                                <div class="subtitulo cblack">
                                    <small>
                                        <?php echo the_sub_field('cargo_equipo'); ?>
                                    </small>
                                </div>
                                <div class="quote pt20 cblack">
                                    <p>
                                        <?php echo the_sub_field('parrafo_equipo'); ?>
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            <?php
            endwhile;
            
            else :
            
                // no rows found
            
            endif;
            
            ?>
            </ul>
            </div>
        </div>
    </div>
</div>
<!-- Fin team -->
<!-- Clientes -->
<section class="vertex_white top">
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-sm-12 cviolet text-center">
                <div class="title s45 f-bold  title_after circle">
                        <span>
                        Clientes
                        </span>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12">
                <div class="single-item">
                    <ul class="list-inline slider_customer">
                        <?php
                            if( have_rows('items_clientes') ):
                            
                            while ( have_rows('items_clientes') ) : the_row();?>
                                <li>
                                <img src="<?php echo the_sub_field('image_cliente')?>" alt="" class="pt20 img-fluid">
                                <a href="<?php echo the_sub_field('url_cliente')?>" class="btn_ghost"></a>
                                </li>
                            <?php
                            endwhile;
                            else :
                            
                                // no rows found
                            
                            endif;
                            
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Fin Clientes -->
<!-- Contenido -->

<script type="text/javascript">
    document.title = 'Cuestionica - Quienes Somos';
</script>