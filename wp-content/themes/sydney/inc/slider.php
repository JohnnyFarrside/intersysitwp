<?php
/**
 * Slider template
 *
 * @package Sydney
 */
/////////////////////////  - SLIDER ENGLISH(EN) -  /////////////////////////////
//Slider template
if ( ! function_exists( 'sydney_slider_template' ) ) :
function sydney_slider_template() {

    if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '8000');
    $text_slide = get_theme_mod('textslider_slide', 0);

    //Slider text
    $slider_title_1     = get_theme_mod('slider_title_1', 'CYBER SECURITY');
    //$slider_title_2     = get_theme_mod('slider_title_2', 'Cloud Service');
    //$slider_title_3     = get_theme_mod('slider_title_3', 'Local Servers');
    $slider_title_4     = get_theme_mod('slider_title_4', 'CLOUD');
    $slider_title_5     = get_theme_mod('slider_title_5', 'SUPPORT');
    $slider_title_6     = get_theme_mod('slider_title_6', 'NETWORK SOLUTIONS');
    ///////////////////////////SLIDER EGGS/////////////////////////////////////
    $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Complete solutions for critical business protection.

	 <br><div class="three-links">
	 	<div class="one-link"><a href="penetration-vulnerability-testing" class="roll-button more-button circle-more">PenTest</a></div>
	 	<div class="one-link"><a href="firewall-intrusion-protection" class="roll-button more-button circle-more">Firewall<br>&<br>Protection</a></div>
	 	<div class="one-link"><a href="business-continuity" class="roll-button more-button circle-more">Business<br>Continuity</a></div>
	 </div>
');


//   <a href="penetration-vulnerability-testing/"><div class="threeggs"><div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/prob-egg.jpg"></div>
// <div class="circle-box">
// <div class="circle-content"><div><span>PENTEST</span></div></div>
// </div></a>
// <a href="intersysitwp/firewall-intrusion-protection/"><div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/prob-egg.jpg"></div>
// <div class="circle-box">
// <div class="circle-content"><div><span>Firewall<br>&<br>Protection</span></div></div>
// </div></a>
// <a href="business-continuity/"><div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/prob-egg.jpg"></div>
// <div class="circle-box">
// <div class="circle-content"><div><span>Business<br>Continuity</span></div></div>
// </div></a>
// </div>




//    $slider_subtitle_2  = get_theme_mod('slider_subtitle_2', 'Access your IT resources on the move<br><div class="eggs" style="margin-left: 20&#37; !important;"><img src="'. get_template_directory_uri() . '/images/eggs/cloud1.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/cloud2.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/cloud3.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/cloud4.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>');
//    $slider_subtitle_3  = get_theme_mod('slider_subtitle_3', 'For convenience & access when you need it<br><div class="eggs" style="margin-left: 20&#37; !important;"><img src="'. get_template_directory_uri() . '/images/eggs/server1.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/server2.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/server3.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>
//<div class="eggs"><img src="'. get_template_directory_uri() . '/images/eggs/server4.jpg"></div>
//<div class="circle-box">
//    <div class="circle-content"><div><span>apple</span></div></div>
//</div>');

//style="margin-left: 24&#37 !important;"
    $slider_subtitle_4  = get_theme_mod('slider_subtitle_4', 'Full management of all Business e-mails from receiving to archiving.
<br><div class="three-links">
	<div class="one-link"><a href="fully-managed" class="roll-button more-button circle-more">Fully<br>Managed</a></div>
	<div class="one-link"><a href="products" class="roll-button more-button circle-more">Products</a></div>
	<div class="one-link"><a href="training" class="roll-button more-button circle-more">Training</a></div>
</div>
');

    $slider_subtitle_5  = get_theme_mod('slider_subtitle_5', 'Vital Business Solutions , Support and Back-up for full continuous<br>functioning of your Business.

<br><div class="three-links">
	<div class="one-link"><a href="fully-managed-support" class="roll-button more-button circle-more">Fully<br>Managed</a></div>
	<div class="one-link"><a href="pay-as-yo-go-it-managment" class="roll-button more-button circle-more">Pay As<br>You Go</a></div>
	<div class="one-link"><a href="consultancy-and-advice" class="roll-button more-button circle-more">Consultancy</a></div>
</div>
');

    $slider_subtitle_6  = get_theme_mod('slider_subtitle_6', 'Strategy and Maintenance of Hardware and Software. <br>
Working alongside with your IT staff or fully assisting.

<br><div class="three-links">
	<div class="one-link"><a href="consultancy-and-advice" class="roll-button more-button circle-more">Consultancy</a></div>
	<div class="one-link"><a href="it-strategy" class="roll-button more-button circle-more">IT Strategy</a></div>
	<div class="one-link"><a href="infrastructure" class="roll-button more-button circle-more">Infrastructure</a></div>
</div>

');
///////////////////////////SLIDER EGGS/////////////////////////////////

    ?>

    <div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>">
        <nav class="slides-navigation">
          <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
          <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
        </nav>

        <div class="slides-container">
            <?php
                if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/slider/poss-cyber_security.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/slider/poss-cyber_security.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo $slider_title_1; ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_1; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
								//if ( get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/slider/slider2.jpg') ) {
                //    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/slider/slider2.jpg')) . ');">';
                    ?>
                        <!--<div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo $slider_title_2; ?></h2>
                                <p class="subtitle"><?php //echo $slider_subtitle_2; ?></p>
                            </div>
                            <?php //sydney_slider_button(); ?>
                        </div> -->
                    <?php
						//    echo '</div>';
                //}
                //if ( get_theme_mod('slider_image_3', get_template_directory_uri() . '/images/slider3.jpg') ) {
                //    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_3', get_template_directory_uri() . '/images/slider/slider3.jpg')) . ');">';
                    ?>
                        <!--<div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php //echo $slider_title_3; ?></h2>
                                <p class="subtitle"><?php //echo $slider_subtitle_3; ?></p>
                            </div>
                            <?php //sydney_slider_button(); ?>
                        </div>-->
                    <?php
                    //echo '</div>';
                //}
                if ( get_theme_mod('slider_image_4', get_template_directory_uri() . '/images/slider/cloud.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_4', get_template_directory_uri() .
                                                                                                        '/images/slider/cloud.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_4); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_4; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
                if ( get_theme_mod('slider_image_5', get_template_directory_uri() . '/images/slider/slider1.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_5', get_template_directory_uri() . '/images/slider/slider1.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_5); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_5; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
						  echo '</div>';
                }
                if ( get_theme_mod('slider_image6', get_template_directory_uri() . '/images/slider/poss-network_sol.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_6', get_template_directory_uri() . '/images/slider/poss-network_sol.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_6); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_6; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
                /* paste this if the slide is empty, to skip the display

                if ( get_theme_mod('slider_image_5') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_5')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_5); ?></h2>
                                <p class="subtitle"><?php echo esc_html($slider_subtitle_5); ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }

                */
            ?>
        </div>
    </div>

    <?php if ( $text_slide ) : ?>
        <?php echo sydney_stop_text(); ?>
    <?php endif; ?>

    <?php
    }
}
endif;

/////////////////////////  - SLIDER SPANISH(ES) -  /////////////////////////////
if ( ! function_exists( 'sydney_slider_template_es' ) ) :
function sydney_slider_template_es() {

    if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '8000');
    $text_slide = get_theme_mod('textslider_slide', 0);

    //Slider text
	 $slider_title_1     = get_theme_mod('slider_title_1', ' CIBERSEGURIDAD');
    //$slider_title_2     = get_theme_mod('slider_title_2', 'Cloud Service');
    //$slider_title_3     = get_theme_mod('slider_title_3', 'Local Servers');
    $slider_title_4     = get_theme_mod('slider_title_4', 'CLOUD');
    $slider_title_5     = get_theme_mod('slider_title_5', 'APOYO');
    $slider_title_6     = get_theme_mod('slider_title_6', 'SOLUCIONES DE RED');

    ///////////////////////////SLIDER EGGS/////////////////////////////////////
    $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Soluciones completas para protección crítica de negocio.

	 <br><div class="three-links">
	 	<div class="one-link"><a href="penetracion-y-pruebas-de-vulnerabilidad/" class="roll-button more-button circle-more">PenTest</a></div>
	 	<div class="one-link"><a href="firewall-y-proteccion-de-intrusion" class="roll-button more-button circle-more">Firewall<br>y<br>Protección</a></div>
	 	<div class="one-link"><a href="continuidad-comercial" class="roll-button more-button circle-more">Continuidad<br>Comercial</a></div>
	 </div>
');
    $slider_subtitle_4  = get_theme_mod('slider_subtitle_4', 'La dirección llena de todo el Negocio envía por correo electrónico de recibir al archivar.
<br><div class="three-links">
	<div class="one-link"><a href="totalmente-manejado" class="roll-button more-button circle-more">Totalmente<br>Manejado</a></div>
	<div class="one-link"><a href="productos" class="roll-button more-button circle-more">Productos</a></div>
	<div class="one-link"><a href="formacion " class="roll-button more-button circle-more">Formación</a></div>
</div>
');

    $slider_subtitle_5  = get_theme_mod('slider_subtitle_5', 'Soluciones Vitales De negocio, Apoyo y Respaldo para lleno continuo <br> funcionamiento de su Negocio.

<br><div class="three-links">
	<div class="one-link"><a href="apoyo-totalmente-manejado" class="roll-button more-button circle-more">Totalmente<br>Manejado</a></div>
	<div class="one-link"><a href="paga-y-habla" class="roll-button more-button circle-more"Paga<br> y Habla</a></div>
	<div class="one-link"><a href="1402-2" class="roll-button more-button circle-more">Consultoría</a></div>
</div>
');

    $slider_subtitle_6  = get_theme_mod('slider_subtitle_6', 'Estrategia y Mantenimiento de Hardware y Software. <br>
Funcionamiento al lado de su personal informático o totalmente asistencia.

<br><div class="three-links">
	<div class="one-link"><a href="1402-2" class="roll-button more-button circle-more">Consultoría</a></div>
	<div class="one-link"><a href="estrategia-de-tecnologia" class="roll-button more-button circle-more">Estrategia<br>de Tecnología</a></div>
	<div class="one-link"><a href="1419-2" class="roll-button more-button circle-more">Infrastructure</a></div>
</div>

');
/////////////////////////// end-SLIDER EGGS/////////////////////////////////

    ?>

    <div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>">
        <nav class="slides-navigation">
          <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
          <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
        </nav>

        <div class="slides-container">
            <?php
                if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/slider/poss-cyber_security.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/slider/poss-cyber_security.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo $slider_title_1; ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_1; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
                if ( get_theme_mod('slider_image_4', get_template_directory_uri() . '/images/slider/cloud.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_4', get_template_directory_uri() .
                                                                                                        '/images/slider/cloud.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_4); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_4; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
                if ( get_theme_mod('slider_image_5', get_template_directory_uri() . '/images/slider/slider1.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_5', get_template_directory_uri() . '/images/slider/slider1.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_5); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_5; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
						  echo '</div>';
                }
                if ( get_theme_mod('slider_image6', get_template_directory_uri() . '/images/slider/poss-network_sol.jpg') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_6', get_template_directory_uri() . '/images/slider/poss-network_sol.jpg')) . ');">';
                    ?>
                        <div class="slide-inner">
                            <div class="contain animated fadeInRightBig text-slider">
                                <h2 class="maintitle"><?php echo esc_html($slider_title_6); ?></h2>
                                <p class="subtitle"><?php echo $slider_subtitle_6; ?></p>
                            </div>
                            <?php sydney_slider_button(); ?>
                        </div>
                    <?php
                    echo '</div>';
                }
            ?>
        </div>
    </div>

    <?php if ( $text_slide ) : ?>
        <?php echo sydney_stop_text(); ?>
    <?php endif; ?>

    <?php
    }
}
endif;
//////////////////  - //SLIDER SPANISH(ES) -  /////////////////////////////////


function sydney_slider_button() {

    if ( !function_exists('pll_register_string') ) {
        // $slider_button      = get_theme_mod('slider_button_text', 'More');
        // $slider_button_url  = get_theme_mod('slider_button_url','#primary');
    } else {
        $slider_button      = pll__(get_theme_mod('slider_button_text', 'Click to begin'));
        $slider_button_url  = pll__(get_theme_mod('slider_button_url','#primary'));
    }

    if ($slider_button) {
        echo '<a href="' . esc_url($slider_button_url) . '" class="roll-button circle-button invert button-slider">' . esc_html($slider_button) . '</a>';
    }
}

function sydney_stop_text() {

    if ( !function_exists('pll_register_string') ) {
        $slider_title_1     = get_theme_mod('slider_title_1', 'Welcome to Sydney');
        $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Feel free to look around');
    } else {
        $slider_title_1     = pll__(get_theme_mod('slider_title_1', 'Welcome to Sydney'));
        $slider_subtitle_1  = pll__(get_theme_mod('slider_subtitle_1','Feel free to look around'));
    }

    ?>
    <div class="slide-inner text-slider-stopped">
        <div class="contain text-slider">
            <h2 class="maintitle"><?php echo esc_html($slider_title_1); ?></h2>
            <p class="subtitle"><?php echo esc_html($slider_subtitle_1); ?></p>
        </div>
        <?php sydney_slider_button(); ?>
    </div>
    <?php
}
