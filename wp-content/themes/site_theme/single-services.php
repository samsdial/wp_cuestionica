<!-- Intro banner -->
<div class="d-none d-sm-block banner banner-forest" style="background-image: url(<?php echo get_field('banner_servicios');?>); height: 76vh;">
    <div class="container text-center">
        <a href="/services/" class="btn btn_blue">Regresar</a>
    </div>
</div>
<div class="d-sm-none banner banner-forest" style="background-image: url(<?php echo get_field('banner_servicios_movil');?>)">
    <div class="container text-right">
    </div>
</div>
<!-- Fin Intro Banner -->
<section class="d-none d-sm-block box_tab" style="margin-top: -250px;">
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav_tabs_misite" id="js_search">
            <?php if( get_field('acordeon_items_servicios') ): ?>
                <?php while ( has_sub_field('acordeon_items_servicios') ) :?>
                    <?php if( get_row_layout() == 'tap_one' ): ?>
                        <li>
                            <a data-toggle="tab" class="" href="#<?php the_sub_field('id'); ?>">
                                <div class="content-personas des-personas text-center s20">
                                    <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                    <div>
                                        <?php the_sub_field('titulo'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_two' ): ?>
                        <li>
                            <a data-toggle="tab" class="" href="#<?php the_sub_field('id'); ?>">
                                <div class="content-personas des-personas text-center s20">
                                    <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>                                    <div>
                                        <?php the_sub_field('titulo'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_three' ): ?>
                        <li>
                            <a data-toggle="tab" class="" href="#<?php the_sub_field('id'); ?>">
                                <div class="content-personas des-personas text-center s20">
                                    <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                    <div>
                                        <?php the_sub_field('titulo'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_four' ): ?>
                        <li>
                            <a data-toggle="tab" class="" href="#<?php the_sub_field('id'); ?>">
                                <div class="content-personas des-personas text-center s20">
                                    <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                    <div>
                                        <?php the_sub_field('titulo'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="tab-personas">
        <div class="bg-white">
            <div class="row pt25 pb25">
                <div class="tab-content" id="js_search_content">
                    <?php if( get_field('acordeon_items_servicios') ): ?>
                        <?php while ( has_sub_field('acordeon_items_servicios') ) :?>
                            <?php if( get_row_layout() == 'tap_one' ): ?>
                                <div id="<?php the_sub_field('id'); ?>" class="tab-pane fade in">
                                    <ul class="list-inline items_services">
                                        <li class=" complement-img text-center pt30 pb30" >
                                            <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                        </li>
                                        <li class=" text-left s20 cl--blue" >
                                            <?php the_sub_field('content'); ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if( get_row_layout() == 'tap_two' ): ?>
                                <div id="<?php the_sub_field('id'); ?>" class="tab-pane fade in">
                                    <ul class="list-inline items_services">
                                        <li class=" complement-img text-center pt30 pb30" >
                                            <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                        </li>
                                        <li class=" text-left s20 cl--blue" >
                                            <?php the_sub_field('content'); ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if( get_row_layout() == 'tap_three' ): ?>
                                <div id="<?php the_sub_field('id'); ?>" class="tab-pane fade in">
                                    <ul class="list-inline items_services">
                                        <li class=" complement-img text-center pt30 pb30" >
                                            <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                        </li>
                                        <li class=" text-left s20 cl--blue" >
                                            <?php the_sub_field('content'); ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if( get_row_layout() == 'tap_four' ): ?>
                                <div id="<?php the_sub_field('id'); ?>" class="tab-pane fade in">
                                    <ul class="list-inline items_services">
                                        <li class=" complement-img text-center pt30 pb30" >
                                            <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                        </li>
                                        <li class=" text-left s20 cl--blue" >
                                            <?php the_sub_field('content'); ?>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="d-sm-none bg-white">
    <div class="container pb50">
        <div class="accordion" id="accordionExample">
            <?php if( get_field('acordeon_items_servicios') ): ?>
                <?php while ( has_sub_field('acordeon_items_servicios') ) :?>
                    <?php if( get_row_layout() == 'tap_one' ): ?>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                        <span>
                                            <?php the_sub_field('titulo'); ?>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                <div class="card-body cl--blue">
                                    <div class="complement-img">
                                        <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                    </div>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_two' ): ?>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                        <span>
                                            <?php the_sub_field('titulo'); ?>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                <div class="card-body cl--blue">
                                    <div class="complement-img">
                                        <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                    </div>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_three' ): ?>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                        <span>
                                            <?php the_sub_field('titulo'); ?>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                <div class="card-body cl--blue">
                                    <div class="complement-img">
                                        <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                    </div>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'tap_four' ): ?>
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <span class="talleres aicon" style="background-image: url('<?php the_sub_field('icono'); ?>');"></span>
                                        <span>
                                            <?php the_sub_field('titulo'); ?>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample" style="">
                                <div class="card-body cl--blue">
                                    <div class="complement-img">
                                        <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt=" Cuestionica servicios">
                                    </div>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="box-slider bg-white">
    <ul class="list-inline slider_workshop ">
        <?php
        if( have_rows('lista_taller_slider') ):
            while ( have_rows('lista_taller_slider') ) : the_row();?>
                <li class="bg-image text-center" style="background-image: url(<?php echo the_sub_field('imagen_taller') ?>); ">
                    <div class="container mt100 mb100">
                    <div class="title title_after title_workshop">
                        <?php echo the_sub_field('titulo_taller')?>
                    </div>
                    <div class="paragraf mt-5" style="font-size: 1.2rem;color: purple;">
                        <?php echo the_sub_field('descripcion_taller')?>
                    </div>
                    </div>
                </li>
                <?php
            endwhile;
        else :
            // no rows found
        endif;
        ?>
    </ul>
</section>
