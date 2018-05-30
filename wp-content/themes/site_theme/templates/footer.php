<footer >
    <div class="text-center">
        <div class="text-center">
            <p class="colsplit">
                Tel:
                <a href="https://api.whatsapp.com/send?phone=+573044553448&text=Hola, Me gustaría contactarme con ustedes" target="_blank">
                    <?php the_field('phone_one', 'option'); ?>
                    </a> ·
                <a href="https://api.whatsapp.com/send?phone=+573102810568&text=Hola, Me gustaría contactarme con ustedes" target="_blank"><?php the_field('phone_two', 'option'); ?></a></p>
                <p class="colsplit">Mail: <a href="mailto:info@cuestionica.com"><?php the_field('email', 'option') ?></a></p>
        </div>
        <ul class="footer_list">
            <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><span class="social fb"></span></a></li>
            <li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><span class="social in"></span></a></li>
        </ul>
        <div class="text-center" style="padding-bottom: 5px"><?php the_field('info', 'option') ?></div>
        <div class="text-center">Diseñado y desarrollado por <a href="https://iccana.com.co/" target="_blank">Agencia ICCANA</a></div>
    </div>
</footer>
<style type="text/css" media="screen">
    footer.inter{
        display: none;
    }
</style>