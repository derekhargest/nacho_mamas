<?php
/**
 * The template for displaying the header
 *
 *
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>	<?php if ( is_front_page() ) : ?>| Modern American: globally influenced, locally spun<?php endif; ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.slicknav.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.bxslider.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/instafeed.min.js"></script>
    <script src="https://use.fontawesome.com/d8d108ee0b.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<script src="https://maps.googleapis.com/maps/api/js?v=3.20"></script>
		<?php // if (is_page ('contact-us')):?>
		<!-- <script>
		var color = "#137d79";
		var overlay = null;
		var map;
		  function initialize() {
		    var myLatLng = {lat: 39.278537, lng: -76.566091};

		    var mapCanvas = document.getElementById('map');
		    var mapOptions = {
		      zoom: 17,
		      mapTypeId: google.maps.MapTypeId.ROADMAP,
		      center: new google.maps.LatLng(39.278900, -76.568170),
		      scrollwheel: false,
		      draggable: false,
		      disableDefaultUI: true
		    };
		    var iconBase = '<?php // echo esc_url( get_template_directory_uri() ) ?>/images/';

		    map = new google.maps.Map(document.getElementById('map'), mapOptions);
		            var marker = new google.maps.Marker({
		                map: map,
		                position: myLatLng,
		                icon: iconBase + 'map-marker.png',
		                title: 'Gunther & Co.'
		    });

		    bounds = new google.maps.LatLngBounds(
		      new google.maps.LatLng(-84.999999, -179.999999),
		      new google.maps.LatLng(84.999999, 179.999999));

		    rect = new google.maps.Rectangle({
		        bounds: bounds,
		        fillColor: color,
		        fillOpacity: 0.5,
		        strokeWeight: 0,
		        map: map
		    });

				if ((window.innerWidth < 850))  {
					var center = map.getCenter();
					var myLatLng = {lat: 39.279024, lng: -76.565706};
	 			 google.maps.event.trigger(map, "resize");
	 			 map.setCenter(myLatLng);
    	}	;

		  }
		  google.maps.event.addDomListener(window, 'load', initialize);

			google.maps.event.addDomListener(window, "resize", function() {
				if ((window.innerWidth < 710))  {
					var center = map.getCenter();
					var myLatLng = {lat: 39.278537, lng: -76.566091};
	 			 google.maps.event.trigger(map, "resize");
	 			 map.setCenter(myLatLng);
    	}
			else{
				var center = new google.maps.LatLng(39.278900, -76.568170);
			 google.maps.event.trigger(map, "resize");
			 map.setCenter(center);
			}	;

		 	});

		</script> -->

	<?php // endif; ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<div class="site-header-main page-header" id="header">
				<div class="main-navigation">
					<div class="nav-button"></div>
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu-left' ) ); ?>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' class="header-logo"><img src='<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/logo.png' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu-right' ) ); ?>
					</nav>
          <?php
              global $woocommerce;

              $qty = $woocommerce->cart->get_cart_contents_count();

              $total = $woocommerce->cart->get_cart_total();

              $cart_url = $woocommerce->cart->get_cart_url();

              ?>

              <?php if($qty>0): ?>

                <div class="header-cart">
                  <a href="<?php echo $cart_url ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>(<?php echo $qty ?>)</span></a>
                </div>

            <?php endif; ?>
				</div>
				<div class="mobile-logo">
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' class="header-logo"><img src='<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/logo.png' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
				<div id="mobile-menu-location">
				</div>
				<div id="mobile-menu" class="mobile-navigation">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</header>
