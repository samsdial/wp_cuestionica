<footer class="inter">
    <div class="container pt50">
        <div class="row mb25">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb40 pt07 text-center">
                <?php 
                $image = get_field('logo_white', 'option');
                if(!empty($image)):?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300">
                <?php endif; ?>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  text-left">
                <ul class="social-list">
                    <li class="init">
                        <span class="icon-phone"></span>
                        <a href="tel:<?php the_field('phone_one', 'option'); ?>"><span class="ml10"><?php the_field('phone_one', 'option'); ?></span></a>
                        -
                        <a href="tel:<?php the_field('phone_two', 'option'); ?>"><span class="ml10"><?php the_field('phone_two', 'option'); ?></span></a>
                    </li>
                    <li class="init">
                        <span class="insta"></span>
                        <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><span class="ml10">Cuestionica</span></a>
                    </li>
                    <li class="pl10" class="init">
                        <span class="facebook"></span>
                        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><span class="ml10">Cuestionica</span></a>
                    </li>
                    <li>
                        <span class="location"></span>
                        <span class="ml10"><?php the_field('ubication', 'option'); ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center footer-copy">Copyright© 2018 Cuestiónica - Todos los derechos reservados
            </div>
            <div class="col-12 text-center">Diseñado y desarrollado por <a href="https://iccana.com.co/" target="_blank">Agencia ICCANA</a></div>
        </div>
    </div>
</footer>
