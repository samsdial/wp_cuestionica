<?php
/**
* Template Name: Contacto
*/
?>
<style type="text/css">

    .acf-map {
        width: 100%;
        height: 400px;
        border: #ccc solid 1px;
        margin: 20px 0;
    }

    /* fixes potential theme css conflict */
    .acf-map img {
        max-width: inherit !important;
    }

</style>
<!--AIzaSyA3gqlmU5SMoVtNzMY5I-50IyshmIReHPs-->
<!-- ADD Intro banner -->
<div class="d-none d-sm-block banner banner-forest" style="background-image: url(<?php echo get_field('banner_sevicio');?>); height: 76vh;">
    <div class="container text-right">
    </div>
</div>
<div class="d-sm-none banner banner-forest" style="background-image: url(<?php echo get_field('banner_sevicio_movil');?>)">
    <div class="container text-right">
    </div>
</div>
<!-- END Intro banner -->

<div class="contact-content bg-violet pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mb20 pr-sm-0">
                <span class="icon-phone"style="font-size:22px;"></span>
                <span class="icon_whatsapp"style="font-size:22px;"></span>
                <div class="paragraf cwhite" style="display: inline-block;">
                    <?php the_field('phone_one', 'option'); ?>
                    <br>
                    <?php the_field('phone_two', 'option');?>
                </div>
                <div class="title text-bold text-uppercase s30">
                    <?php the_field('ubication', 'option');?>
                </div>
                <div class="map">
                    <?php

                    $location = get_field('mapa_contacto');

                    if( !empty($location) ):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-6 mb20 pl-sm-0">
                <div class="contact-form cviolet bg-white p40">
                    <form id="interest">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Celular:</label>
                        <input type="number" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="msn">Mensaje:</label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                    </div>
                        <div class="form-group">
                            <div class="alerta">
                                <p></p>
                            </div>
                        </div>
                    <div class="text-right"><button type="submit" class="btn bg-violet cwhite f-bold">Enviar <span class="icons_mail"></span></button></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function( $ ) {
        $('#interest').submit(function(){
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var message = $("#message").val();
            var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            if(name=="" || email=="" || phone=="" || message==""){
                return false;
            }else{
                if(!validacion_email.test(email)){
                    return false;
                }else{
                    $.ajax({
                        method:"Post",
                        url:"/wp-content/themes/site_theme/lib/interest.php",
                        dataType:"json",
                        data:{
                            name: name,
                            phone: phone,
                            email: email,
                            message: message
                        }
                    }).done(function( msg ) {
                        if(msg.success) {
                            $("#name").val("");
                            $("#phone").val("");
                            $("#email").val("");
                            $("#city").val("");
                            $("#message").val("");
                            $('.alerta p').html('Gracias, pronto nos contactaremos contigo.');

                        }
                        else {
                            $('.alerta p').html('Error, pronto lo resolveremos.');
                        }
                    });
                }
                return false;
            }
        });
    })(jQuery);
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3gqlmU5SMoVtNzMY5I-50IyshmIReHPs"></script>
<script type="text/javascript">
    (function($) {
        /*
         *  new_map
         *
         *  This function will render a Google Map onto the selected jQuery element
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	$el (jQuery element)
         *  @return	n/a
         */

        function new_map( $el ) {

            // var
            var $markers = $el.find('.marker');


            // vars
            var args = {
                zoom		: 16,
                center		: new google.maps.LatLng(0, 0),
                mapTypeId	: google.maps.MapTypeId.ROADMAP
            };


            // create map
            var map = new google.maps.Map( $el[0], args);


            // add a markers reference
            map.markers = [];


            // add markers
            $markers.each(function(){

                add_marker( $(this), map );

            });


            // center map
            center_map( map );


            // return
            return map;

        }

        /*
         *  add_marker
         *
         *  This function will add a marker to the selected Google Map
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	$marker (jQuery element)
         *  @param	map (Google Map object)
         *  @return	n/a
         */

        function add_marker( $marker, map ) {

            // var
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            // create marker
            var marker = new google.maps.Marker({
                position	: latlng,
                map			: map
            });

            // add to array
            map.markers.push( marker );

            // if marker contains HTML, add it to an infoWindow
            if( $marker.html() )
            {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content		: $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open( map, marker );

                });
            }

        }

        /*
         *  center_map
         *
         *  This function will center the map, showing all markers attached to this map
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	4.3.0
         *
         *  @param	map (Google Map object)
         *  @return	n/a
         */

        function center_map( map ) {

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each( map.markers, function( i, marker ){

                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                bounds.extend( latlng );

            });

            // only 1 marker?
            if( map.markers.length == 1 )
            {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else
            {
                // fit to bounds
                map.fitBounds( bounds );
            }

        }

        /*
         *  document ready
         *
         *  This function will render each map when the document is ready (page has loaded)
         *
         *  @type	function
         *  @date	8/11/2013
         *  @since	5.0.0
         *
         *  @param	n/a
         *  @return	n/a
         */
// global var
        var map = null;

        $(document).ready(function(){

            $('.acf-map').each(function(){

                // create map
                map = new_map( $(this) );

            });

        });

    })(jQuery);
</script>