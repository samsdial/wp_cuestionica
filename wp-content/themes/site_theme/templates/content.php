
<!-- Slider CGR HOME UNO -->
<?php
    get_template_part('templates/header');
?>

<main>
    <div class="content">
        <!-- Pieces Slider -->
        <div class="pieces-slider">
            <?php if( have_rows('slider', 'option') ) : ?>
                <?php $i = 0; ?>
                <?php  while ( have_rows('slider', 'option') ) : the_row();?>
                    <?php  if ($i = 0 ) : ?>
                        <div class="pieces-slider__slide">
                            <img class="pieces-slider__image" src="<?php echo get_sub_field( 'image' )['url']; ?>" alt="">
                            <div class="pieces-slider__text"><?php the_sub_field( 'title' ); ?></div>
                        </div>

                        <!--<?php //  the_sub_field( 'subtitulo' ); ?> -->

                    <?php  else : ?>
                        <div class="pieces-slider__slide">
                            <img class="pieces-slider__image" src="<?php echo get_sub_field( 'image' )['url']; ?>" alt="">
                            <div class="pieces-slider__text"><?php the_sub_field( 'title' ); ?></div>
                        </div>

                        <!--<?php //  the_sub_field( 'subtitulo' ); ?> -->
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php  endwhile; ?>
            <?php endif?>

            <!-- Canvas to draw the pieces -->
            <canvas class="pieces-slider__canvas"></canvas>
            <!-- Slider buttons: prev and next -->
            <button class="pieces-slider__button pieces-slider__button--prev"><img src="<?php bloginfo('template_directory') ?>/dist/img/left_arrow.png" alt="Left" title="Anterior"></button>
            <button class="pieces-slider__button pieces-slider__button--next"><img src="<?php bloginfo('template_directory') ?>/dist/img/right_arrow.png" alt="Right" title="Siguiente"></button>
        </div>
    </div>
</main>

<?php
    get_template_part('templates/footer');
?>

<!--
    <main class="full">
        <div class="slider">

        </div>
        <div class="box_gradient"></div>
    </main>
    -->
<!-- FIN
    <main class="middle pd_top--x50 pd_bottom--x100">
      <section id="welcome">
        <div class="box_content">
          <div class="title mg_bottom--x30 txt_size--x35 txt_upper txt_center cl--gray">
            <h2><?php // the_field('title_intro', 'option') ; ?></h2>
          </div>
          <div class="subtitle mg_bottom--x20 txt_center cl--blue">
            <p><b><?php // the_field('subtitle_blue','option') ; ?></b></p>
          </div>
          <div class="paragraf txt_center">
            <p><?php // the_field('description_intro','option') ; ?></p>
          </div>
        </div>
      </section>
    </main>
    -->
<!--
<main class="full bgc--gainsboro pd_top--x100 pd_bottom--x50">
      <div class="container">
        <div class="row">
          <div class="column column-min txt_center pd_box--x20 bdrBlue_left_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-mision"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>misión</h2>
            </div>
            <div class="content">
              <p><?php // the_field('mision', 'option')?></p>
            </div>
          </div>
          <div class="column column-min txt_center pd_box--x20 bdrBlue_left_sm--x1 bdrBlue_right_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-view"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>visión</h2>
            </div>
            <div class="content">
              <p><?php // the_field('vision', 'option')?></p>
            </div>
          </div>
          <div class="column column-min txt_center pd_box--x20 bdrBlue_right_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-theme"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>Equipo</h2>
            </div>
            <div class="content">
              <p><?php // the_field('team', 'option')?></p>
            </div>
          </div>
        </div>
      </div>
    </main>
-->