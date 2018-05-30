<!-- ADD Intro banner -->
<div class="d-none d-sm-block banner banner-forest" style="background-image: url(<?php echo get_field('banner_wemake');?>); height: 76vh;">
    <div class="container text-right">
    </div>
</div>
<div class="d-sm-none banner banner-forest" style="background-image: url(<?php echo get_field('banner_wemake_movil');?>)">
    <div class="container text-right">
    </div>
</div>
<!-- END Intro banner -->

<div class="team-action">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                <div class="box_title_wemake">
                    <div class="title team-action_title">
                        <?php echo get_field('titulo'); ?>
                    </div>
                    <div class="subtitle team-action_sub title_font_site">
                         <?php echo get_field('sub_titulo'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php

            if( have_rows('items') ):
            
            while ( have_rows('items') ) : the_row();?>
            
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 eco">
                    <div class="team-block">
                        <div class="team-img product-img" style="background-image: url(<?php echo the_sub_field('imagen_item');?>)">
                            <div class="team-content bg-violet text-right product">
                                <div class="info_data">
                                    <p><?php echo the_sub_field('subtitulo_item'); ?></p>
                                    <div class="title-content">
                                       <?php echo the_sub_field('titulo_item'); ?> 
                                    </div>
                                </div>
                                <a href="http://cuestionica.com/services/<?php echo the_sub_field('url_item'); ?> " class="btn_ghost"></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            endwhile;
            
            else :
            
                 // NO hay INFO
            
            endif;
            
            ?>
        </div>
        
    </div>
</div>
<div class="themes-work">
    <div class="container">
        <div class="row mb30">
            <div class="col mt40">
            	<div class="box_theme_work text-center ">
                	<div class="themes-work_title title_after circle">
                        <span>
                        <?php echo get_field('titulo_trabajo'); ?>
                        </span>
                    </div>
                    <div class="subtitulo cviolet s20" style="margin-left: 113px;">
                        <?php echo get_field('subtitulo_trabajo'); ?> 
                    </div>
            	</div>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <ul class="list-inline js_themes">
        
        <?php    
        if( have_rows('items_trabajo') ):
    
        while ( have_rows('items_trabajo') ) : the_row();?> 
            <li>
                <div class="mb40 text-center">
                    <img src="<?php echo the_sub_field('items_trabajo_images');?>" alt="">
                </div>
            </li>
        <?php endwhile;
        
        else :
        
            // NO hay INFO
        
        endif;
        
        ?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.title = 'Cuestionica - Que Hacemos';
</script>