<?php
/**
 * @package Sydney
 */

//Converts hex colors to rgba for the menu background color
function sydney_hex2rgba($color, $opacity = false) {

        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        $rgb =  array_map('hexdec', $hex);
        $opacity = 1;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';

        return $output;
}

//Dynamic styles
function sydney_custom_styles($custom) {

	$custom = '';

	/* we changed the highlight color */
	$custom .= "::-moz-selection {background: #96e4e2;} ::selection {background: #96e4e2;}";
	$custom .= ".subtitle img {position: static !important; height: 200px !important; width: 200px !important;  margin-top: 50px; border-radius: 50%; margin-left: 20px;}";
	$custom .= ".threeggs{width: 600px !important; margin: auto !important;}";
	$custom .= ".subtitle img:hover{-webkit-box-shadow: 0px 0px 30px 0px rgba(68, 194, 205, 0.67);
-moz-box-shadow:    0px 0px 30px 0px rgba(68, 194, 205, 0.67);
box-shadow:         0px 0px 30px 0px rgba(68, 194, 205, 0.67);}";
	$custom .= ".eggs img {
position: static !important;
width: 150px !important;
  height: 150px !important;
  border-radius: 50%;
  display: inline;
  float: left;
  margin-left: 25px;
  margin-right: 25px;
}
.circle-box:hover {
-webkit-box-shadow: 0px 0px 30px 0px rgba(68, 194, 205, 0.67);
-moz-box-shadow:    0px 0px 30px 0px rgba(68, 194, 205, 0.67);
box-shadow:         0px 0px 30px 0px rgba(68, 194, 205, 0.67);
}
.circle-box{
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    float: left;
    margin-left: -175px;

}
.circle-box:before{
    content: '';
    display: block;
    padding-top: 100%;
}
.circle-content{
    position:  absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: white;
}
.circle-content div {
   display: table;
   width: 100%;
   height: 100%;
   font-size: 1.3em;
   font-weight: bold;
}
.circle-content span {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    color: #070444;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    height: 80px;
}
";
$custom .= '
.ball {
  display: inline-block;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  position: relative
 background-color: rgba(0,0,0, 0.4) !important;
  background: radial-gradient(circle at bottom, #c9d9db, #8aaaaf 10%, #575e65 80%, #062745 100%);
  opacity: 0.7;
}
  .ball:before {
    content: "";
    position: absolute;
    top: 1%;
    left: 5%;
    width: 90%;
    height: 90%;
    border-radius: 100%;

    background: radial-gradient(circle at top, white, rgba(255, 255, 255, 0) 58%);
    -webkit-filter: blur(5px);
    filter: blur(5px);
    z-index: 2;

 }
  .ball:after {
    content: "";
    position: absolute;
    display: none;
    top: 5%;
    left: 10%;
    width: 80%;
    height: 80%;
    border-radius: 100%;
    -webkit-filter: blur(1px);
    filter: blur(1px);
    z-index: 2;
    -webkit-transform: rotateZ(-30deg);
    transform: rotateZ(-30deg); }
  .ball .shadow {
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1) 40%, rgba(0, 0, 0, 0) 50%);
    -webkit-transform: rotateX(90deg) translateZ(-160px);
    transform: rotateX(90deg) translateZ(-160px);
    z-index: 1; }
  .ball.plain {
    background: black; }
    .ball.plain:before, .ball.plain:after {
      display: none; }
  .ball.bubble {
    background: radial-gradient(circle at 50% 55%, rgba(240, 245, 255, 0.9), rgba(240, 245, 255, 0.9) 40%, rgba(225, 238, 255, 0.8) 60%, rgba(43, 130, 255, 0.4));
    -webkit-animation: bubble-anim 2s ease-out infinite;
    animation: bubble-anim 2s ease-out infinite;
	  /*background-image: url('. get_template_directory_uri() .'/images/slider/icons/slide-drop.jpg);
	  background-size: 150px;
	  opacity: 0.5;*/
  }
    .ball.bubble:before {
      -webkit-filter: blur(0);
      filter: blur(0);
      height: 80%;
      width: 40%;
      background: radial-gradient(circle at 130% 130%, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 46%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0.8) 58%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);
      -webkit-transform: translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg);
      transform: translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg); }
    .ball.bubble:after {
      display: block;
      background: radial-gradient(circle at 50% 80%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 74%, white 80%, white 84%, rgba(255, 255, 255, 0) 100%); }

.stage {
  width: 150px;
  height: 150px;
  display: inline-block;
  margin: 20px;
  -webkit-perspective: 1200px;
  -moz-perspective: 1200px;
  -ms-perspective: 1200px;
  -o-perspective: 1200px;
  perspective: 1200px;
  -webkit-perspective-origin: 50% 50%;
  -moz-perspective-origin: 50% 50%;
  -ms-perspective-origin: 50% 50%;
  -o-perspective-origin: 50% 50%;
  perspective-origin: 50% 50;
}
bubbles {
  width: 150px;
  margin: 20px auto;
  background: linear-gradient(to bottom, rgba(50, 50, 50, 0.3) 0%, rgba(200, 200, 200, 0.6) 40%, #000000 100%);
  background-repeat: no-repeat;
}


  .bubble-content{
	  display: table;
	  position: absolute;
	  width: 165px;
	  height: 165px !important;
	  color: #00ACEC;
	  font-weight: bold;
	  text-align: center;
	  font-size: 1em;
	  margin: auto;
	  opacity: 1 !important;
   }
	.bubble-content p{
		display: table-cell;
		vertical-align: middle;
	}
  .bck-img img{
	  position: absolute;
	  height: 165px !important;
	  width: 165px !important;
	  top: 0 !important;
	  left: 0 !important;
	  border-radius: 100%;
	  opacity: 0.7;
  }
  .three-links{
	  margin: auto;
	  display: table;
  }
  .three-links a:link, .three-links a:visited{
	  margin-right: 10px;
	  font-size: 1.15em;
	  text-transform: none;
	  background-color: rgba(200,200,200, 0.07);
     color: white;
	  /* width: 150px !important;
	  height: 150px !important; */
	  border-radius: 100% !important;
	  padding: 2%;
  }
   .three-links a:hover, .three-links a:active{
	  background-color: #36a9f4;
  }
  .one-link{
	  display: table;
	  width: 165px;
	  height: 165px;
	  margin-right: 14px;
	  margin-left: 14px;
	  position: relative;
	  float: left;

	  overflow-wrap: break-word;
  }
  a.roll-button.more-button.circle-more{
	  display: table-cell;
	  vertical-align: middle;
  }
';


// //***********************  - Annimation of the bubbles -  ***************************//
// @-webkit-keyframes inmove-anim {
//   0% {
// 	 -webkit-transform: scale(1);
// 	 transform: scale(1); }
//
//   20% {
// 	 -webkit-transform: scaleY(0.95) scaleX(1.05);
// 	 transform: scaleY(0.95) scaleX(1.05); }
//
//   48% {
// 	 -webkit-transform: scaleY(1.1) scaleX(0.9);
// 	 transform: scaleY(1.1) scaleX(0.9); }
//
//   68% {
// 	 -webkit-transform: scaleY(0.98) scaleX(1.02);
// 	 transform: scaleY(0.98) scaleX(1.02); }
//
//   80% {
// 	 -webkit-transform: scaleY(1.02) scaleX(0.98);
// 	 transform: scaleY(1.02) scaleX(0.98); }
//
//   97%, 100% {
// 	 -webkit-transform: scale(1);
// 	 transform: scale(1); } }
//
// @keyframes bubble-anim {
//   0% {
// 	 -webkit-transform: scale(1);
// 	 transform: scale(1); }
//
//   20% {
// 	 -webkit-transform: scaleY(0.95) scaleX(1.05);
// 	 transform: scaleY(0.95) scaleX(1.05); }
//
//   48% {
// 	 -webkit-transform: scaleY(1.1) scaleX(0.9);
// 	 transform: scaleY(1.1) scaleX(0.9); }
//
//   68% {
// 	 -webkit-transform: scaleY(0.98) scaleX(1.02);
// 	 transform: scaleY(0.98) scaleX(1.02); }
//
//   80% {
// 	 -webkit-transform: scaleY(1.02) scaleX(0.98);
// 	 transform: scaleY(1.02) scaleX(0.98); }
//
//   97%, 100% {
// 	 -webkit-transform: scale(1);
// 	 transform: scale(1); }
//  }

	//Header
	if ( (get_theme_mod('front_header_type','slider') == 'nothing' && is_front_page()) || (get_theme_mod('site_header_type') == 'nothing' && !is_front_page()) ) {
		$menu_bg_color = get_theme_mod( 'menu_bg_color', '#000000' );
		$rgba 	= sydney_hex2rgba($menu_bg_color, 0.6);
		$custom .= ".site-header { position:relative;background-color:" . esc_attr($rgba) . ";}" . "\n";
		$custom .= ".admin-bar .site-header,.admin-bar .site-header.float-header { top:0;}"."\n";
		$custom .= ".site-header.fixed {position:relative;}"."\n";
		$custom .= ".site-header.float-header {padding:20px 0;}"."\n";
	}
	//Fonts
	$body_fonts = get_theme_mod('body_font_family');
	$headings_fonts = get_theme_mod('headings_font_family');
	if ( $body_fonts !='' ) {
		$custom .= "body, #mainnav ul ul a { font-family:" . $body_fonts . "!important;}"."\n";
	}
	if ( $headings_fonts !='' ) {
		$custom .= "h1, h2, h3, h4, h5, h6, #mainnav ul li a, .portfolio-info, .roll-testimonials .name, .roll-team .team-content .name, .roll-team .team-item .team-pop .name, .roll-tabs .menu-tab li a, .roll-testimonials .name, .roll-project .project-filter li a, .roll-button, .roll-counter .name-count, .roll-counter .numb-count button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] { font-family:" . $headings_fonts . ";}"."\n";
	}
    //Site title
    $site_title_size = get_theme_mod( 'site_title_size', '32' );
    if ($site_title_size) {
        $custom .= ".site-title { font-size:" . intval($site_title_size) . "px; }"."\n";
    }
    //Site description
    $site_desc_size = get_theme_mod( 'site_desc_size', '16' );
    if ($site_desc_size) {
        $custom .= ".site-description { font-size:" . intval($site_desc_size) . "px; }"."\n";
    }
    //Menu
    $menu_size = get_theme_mod( 'menu_size', '16' );
    if ($menu_size) {
        $custom .= "#mainnav ul li a { font-size:" . intval($menu_size) . "px; }"."\n";
    }
	//H1 size
	$h1_size = get_theme_mod( 'h1_size','45' );
	if ($h1_size) {
		$custom .= "h1 { font-size:" . intval($h1_size) . "px; }"."\n";
	}
    //H2 size
    $h2_size = get_theme_mod( 'h2_size','35' );
    if ($h2_size) {
        $custom .= "h2 { font-size:" . intval($h2_size) . "px; }"."\n";
    }
    //H3 size
    $h3_size = get_theme_mod( 'h3_size','28' );
    if ($h3_size) {
        $custom .= "h3 { font-size:" . intval($h3_size) . "px; }"."\n";
    }
    //H4 size
    $h4_size = get_theme_mod( 'h4_size','25' );
    if ($h4_size) {
        $custom .= "h4 { font-size:" . intval($h4_size) . "px; }"."\n";
    }
    //H5 size
    $h5_size = get_theme_mod( 'h5_size','20' );
    if ($h5_size) {
        $custom .= "h5 { font-size:" . intval($h5_size) . "px; }"."\n";
    }
    //H6 size
    $h6_size = get_theme_mod( 'h6_size','18' );
    if ($h6_size) {
        $custom .= "h6 { font-size:" . intval($h6_size) . "px; }"."\n";
    }
    //Body size
    $body_size = get_theme_mod( 'body_size', '16' );
    if ($body_size) {
        $custom .= "body { font-size:" . intval($body_size) . "px; }"."\n";
    }

	//Header image
	$header_bg_size = get_theme_mod('header_bg_size','cover');
	$header_height = get_theme_mod('header_height','300');
	$custom .= ".header-image { background-size:" . esc_attr($header_bg_size) . ";}"."\n";
	$custom .= ".header-image { height:" . intval($header_height) . "px; }"."\n";

	//Menu style
	$sticky_menu = get_theme_mod('sticky_menu','sticky');
	if ($sticky_menu == 'static') {
		$custom .= ".site-header.fixed { position: absolute;}"."\n";
	}
	$menu_style = get_theme_mod('menu_style','inline');
	if ($menu_style == 'centered') {
		$custom .= ".header-wrap .col-md-4, .header-wrap .col-md-8 { width: 100%; text-align: center;}"."\n";
		$custom .= "#mainnav { float: none;}"."\n";
		$custom .= "#mainnav li { float: none; display: inline-block;}"."\n";
		$custom .= "#mainnav ul ul li { display: block; text-align: left;}"."\n";
		$custom .= ".site-logo, .header-wrap .col-md-4 { margin-bottom: 15px; }"."\n";
		$custom .= ".btn-menu { margin: 0 auto; float: none; }"."\n";
	}


	//__COLORS
	//Primary color
	$primary_color = get_theme_mod( 'primary_color', '#d65050' );
	if ( $primary_color != '#d65050' ) {
	$custom .= ".widget-area .widget_fp_social a,#mainnav ul li a:hover, .sydney_contact_info_widget span, .roll-team .team-content .name,.roll-team .team-item .team-pop .team-social li:hover a,.roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before,.roll-testimonials .name,.roll-button.border,.roll-button:hover,.roll-icon-list .icon i,.roll-icon-list .content h3 a:hover,.roll-icon-box.white .content h3 a,.roll-icon-box .icon i,.roll-icon-box .content h3 a:hover,.switcher-container .switcher-icon a:focus,.go-top:hover,.hentry .meta-post a:hover,#mainnav > ul > li > a.active, #mainnav > ul > li > a:hover, button:hover, input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover, .text-color, .social-menu-widget a, .social-menu-widget a:hover, .archive .team-social li a, a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:" . esc_attr($primary_color) . "}"."\n";
	$custom .= ".project-filter li a.active, .project-filter li a:hover,.preloader .pre-bounce1, .preloader .pre-bounce2,.roll-team .team-item .team-pop,.roll-progress .progress-animate,.roll-socials li a:hover,.roll-project .project-item .project-pop,.roll-project .project-filter li.active,.roll-project .project-filter li:hover,.roll-button.light:hover,.roll-button.border:hover,.roll-button,.roll-icon-box.white .icon,.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span,.go-top,.bottom .socials li:hover a,.sidebar .widget:before,.blog-pagination ul li.active,.blog-pagination ul li:hover a,.content-area .hentry:after,.text-slider .maintitle:after,.error-wrap #search-submit:hover,#mainnav .sub-menu li:hover > a,#mainnav ul li ul:after, button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"], .panel-grid-cell .widget-title:after { background-color:" . esc_attr($primary_color) . "}"."\n";
	$custom .= ".roll-socials li a:hover,.roll-socials li a,.roll-button.light:hover,.roll-button.border,.roll-button,.roll-icon-list .icon,.roll-icon-box .icon,.owl-theme .owl-controls .owl-page span,.comment .comment-detail,.widget-tags .tag-list a:hover,.blog-pagination ul li,.hentry blockquote,.error-wrap #search-submit:hover,textarea:focus,input[type=\"text\"]:focus,input[type=\"password\"]:focus,input[type=\"datetime\"]:focus,input[type=\"datetime-local\"]:focus,input[type=\"date\"]:focus,input[type=\"month\"]:focus,input[type=\"time\"]:focus,input[type=\"week\"]:focus,input[type=\"number\"]:focus,input[type=\"email\"]:focus,input[type=\"url\"]:focus,input[type=\"search\"]:focus,input[type=\"tel\"]:focus,input[type=\"color\"]:focus, button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"], .archive .team-social li a { border-color:" . esc_attr($primary_color) . "}"."\n";
	}
	//Menu background
	$menu_bg_color = get_theme_mod( 'menu_bg_color', '#000000' );
	$rgba = sydney_hex2rgba($menu_bg_color, 0.9);
	$custom .= ".site-header.float-header { background-color:" . esc_attr($rgba) . "; border-bottom: thin solid #555;}" . "\n";
	$custom .= "@media only screen and (max-width: 991px) { .site-header { background-color:" . esc_attr($menu_bg_color) . ";}}" . "\n";
	//Site title
	$site_title = get_theme_mod( 'site_title_color', '#ffffff' );
	$custom .= ".site-title a, .site-title a:hover { color:" . esc_attr($site_title) . "}"."\n";
	//Site desc
	$site_desc = get_theme_mod( 'site_desc_color', '#ffffff' );
	$custom .= ".site-description { color:" . esc_attr($site_desc) . "}"."\n";
	//Top level menu items color
	$top_items_color = get_theme_mod( 'top_items_color', '#ffffff' );
	$custom .= "#mainnav ul li a, #mainnav ul li::before { color:" . esc_attr($top_items_color) . "}"."\n";
	//Sub menu items color
	$submenu_items_color = get_theme_mod( 'submenu_items_color', '#ffffff' );
	$custom .= "#mainnav .sub-menu li a { color:" . esc_attr($submenu_items_color) . "}"."\n";
	//Sub menu background
	$submenu_background = get_theme_mod( 'submenu_background', '#1c1c1c' );
	$custom .= "#mainnav .sub-menu li a { background:" . esc_attr($submenu_background) . "}"."\n";
	//Header slider text
	$slider_text = get_theme_mod( 'slider_text', '#ffffff' );
	$custom .= ".text-slider .maintitle, .text-slider .subtitle { color:" . esc_attr($slider_text) . "}"."\n";
	//Body
	$body_text = get_theme_mod( 'body_text_color', '#666' );
	$custom .= "body { color:" . esc_attr($body_text) . " ;letter-spacing: 1px;}"."\n";
	//Sidebar background
	$sidebar_background = get_theme_mod( 'sidebar_background', '#ffffff' );
	$custom .= "#secondary { background-color:" . esc_attr($sidebar_background) . "}"."\n";
	//Sidebar color
	$sidebar_color = get_theme_mod( 'sidebar_color', '#767676' );
	$custom .= "#secondary, #secondary a, #secondary .widget-title { color:" . esc_attr($sidebar_color) . "}"."\n";
	//Footer widget area background
	$footer_widgets_background = get_theme_mod( 'footer_widgets_background', '#0f0' );
	//$custom .= ".footer-widgets { background-color:" . esc_attr($footer_widgets_background) . "}"."\n";
	$custom .= '.footer-widgets { height: auto; /*background-image: url("http://' . $_SERVER['SERVER_NAME'] . '/wp-content/themes/sydney/images/poly.png");*/ background-color: rgba(51,51,51,1); }'."\n";
	//Footer widget area color
	$footer_widgets_color = get_theme_mod( 'footer_widgets_color', '#767676' );
	if ( $footer_widgets_color != '#767676' ) {
		$custom .= "#sidebar-footer,#sidebar-footer a,.footer-widgets .widget-title { color:" . esc_attr($footer_widgets_color) . "}"."\n";
	}
	//Footer background
	$footer_background = get_theme_mod( 'footer_background', '#1c1c1c' );
	$custom .= ".site-footer { background-color:" . esc_attr($footer_background) . "}"."\n";
	//Footer color
	$footer_color = get_theme_mod( 'footer_color', '#666666' );
	$custom .= ".site-footer,.site-footer a { color:" . esc_attr($footer_color) . "}"."\n";
	//Rows overlay
	$rows_overlay = get_theme_mod( 'rows_overlay', '#000000' );
	$custom .= ".overlay { background-color:" . esc_attr($rows_overlay) . "}"."\n";

	//Page wrapper padding
	$pw_top_padding = get_theme_mod( 'wrapper_top_padding', '83' );
	$pw_bottom_padding = get_theme_mod( 'wrapper_bottom_padding', '0' );
	$custom .= ".page-wrap { padding-top:" . intval($pw_top_padding) . "px;}"."\n";
	$custom .= ".page-wrap { padding-bottom:" . intval($pw_bottom_padding) . "px;}"."\n";


    $text_slide = get_theme_mod('textslider_slide', 0);
    if ( $text_slide ) {
		$custom .= ".slide-inner { display:none;}"."\n";
		$custom .= ".slide-inner.text-slider-stopped { display:block;}"."\n";
    }


	//Output all the styles
	wp_add_inline_style( 'sydney-style', $custom );
}
add_action( 'wp_enqueue_scripts', 'sydney_custom_styles' );
