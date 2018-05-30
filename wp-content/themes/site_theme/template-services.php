<?php
/**
* Template Name: Servicios
*/
?>
<!-- ADD Intro banner -->
<div class="d-none d-sm-block services-profiles" style="background-image: url(<?php echo get_field('banner_sevicio')?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 profile" > <!-- style="background-image: url('<?php echo get_field('imagen_servicio')?>');" -->
                <a href="<?php echo get_field('url_servicio')?>">
                    <span class="content_btn_profile">
                        <span class="icons_triangle"></span>
                        <span><?php echo get_field('Title_service')?></span>
                        <span class="icon-person"></span>
                    </span>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 profile" > <!-- style="background-image: url('<?php echo get_field('imagen_servicio_two')?>');" -->
                <a href="<?php echo get_field('url_servicio_two')?>">
                    <span class="content_btn_profile">
                        <span class="icons_triangle top" style="top: 55px;"></span>
                        <span><?php echo get_field('Title_service_two')?></span>
                        <span class="icon-company"></span>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="d-sm-none services-profiles" style="background-image: url(<?php echo get_field('banner_sevicio_movil')?>)">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 profile" > <!-- style="background-image: url('<?php echo get_field('imagen_servicio')?>');" -->
                <a href="<?php echo get_field('url_servicio')?>">
                    <span class="content_btn_profile">
                        <span class="icons_triangle"></span>
                        <span><?php echo get_field('Title_service')?></span>
                    </span>
                </a>
            </div>
            <div class="col-12 col-sm-6 profile" > <!-- style="background-image: url('<?php echo get_field('imagen_servicio_two')?>');" -->
                <a href="<?php echo get_field('url_servicio_two')?>">
                    <span class="content_btn_profile">
                        <span class="icons_triangle top" style="top: 55px;"></span>
                        <span><?php echo get_field('Title_service_two')?></span>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- END Intro banner -->

<script type="text/javascript">
    document.title = 'Cuestionica - Servicios';
</script>
