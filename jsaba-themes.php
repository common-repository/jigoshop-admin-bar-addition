<?php
/**
 * Display links to active Jigoshop compatible/specific themes settings' pages
 *
 * @package    Jigoshop Admin Bar Addition
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2011-2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/jigoshop-admin-bar-addition/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

/**
 * Display link to active Jigotheme theme settings page (premium, by Jigowatt/Jigoshop)
 *
 * @since 1.0
 */
if ( get_current_theme() == 'Jigotheme' || get_template() == 'jigotheme' ) {
	$menu_items['jigotheme-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Jigotheme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=theme-config.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Jigotheme Settings', 'jsaba' ) )
	);
}  // end-if Jigotheme


/**
 * Display link to active Corellian theme settings page (premium, by Jigowatt/Jigoshop)
 *
 * @since 1.0
 */
if ( get_current_theme() == 'Corellian' || get_template() == 'corellian' ) {
	$menu_items['corellian-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Corellian Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=theme-config.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Corellian Theme Settings', 'jsaba' ) )
	);
}  // end-if Corellian


/**
 * Display link to active Origin theme settings page (premium, by Jigowatt/Jigoshop)
 *
 * @since 1.0
 */
if ( get_current_theme() == 'Origin' || get_template() == 'origin' ) {
	$menu_items['origin-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Origin Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=theme-config.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Origin Theme Settings', 'jsaba' ) )
	);
}  // end-if Origin


/**
 * Display link to active Serenum theme settings page (premium, by Jigowatt/Jigoshop)
 *
 * @since 1.5
 */
if ( get_current_theme() == 'Serenum' || get_template() == 'serenum' ) {
	$menu_items['serenum-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Serenum Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=theme-config.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Serenum Theme Settings', 'jsaba' ) )
	);
}


/**
 * Display link to active Overload theme settings page (premium, by Jigowatt/Jigoshop)
 *
 * @since 1.5
 */
if ( get_current_theme() == 'Overload' || get_template() == 'overload' ) {
	$menu_items['overload-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Overload Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=theme-config.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Overload Theme Settings', 'jsaba' ) )
	);
}  // end-if Overload


/**
 * Display link to active Skeleton theme settings page (free, by Simple Themes)
 *
 * @since 1.1
 */
if ( get_current_theme() == 'Skeleton' || get_template() == 'skeleton' ) {
	$menu_items['skeleton-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Skeleton Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=options-framework' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Skeleton Theme Settings', 'jsaba' ) )
	);
}  // end-if Skeleton


/**
 * Display link to active Animal House theme settings page (premium, by JamiGibbs at ThemeForest)
 *
 * @since 1.1
 */
if ( get_current_theme() == 'Animal House' || get_template() == 'animalhouse' || get_template() == 'animal-house' ) {
	$menu_items['animalhouse-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Animal House Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=options-framework' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Animal House Theme Settings', 'jsaba' ) )
	);
}  // end-if Animal House


/**
 * Display link to active FreshShop theme settings page (premium, by JamiGibbs at ThemeForest)
 *
 * @since 1.1
 */
if ( get_current_theme() == 'FreshShop' || get_template() == 'freshshop' ) {
	$menu_items['freshshop-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'FreshShop Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=options-framework' ),
		'meta'   => array( 'target' => '', 'title' => __( 'FreshShop Theme Settings', 'jsaba' ) )
	);
}  // end-if FreshShop


/**
 * Display link to active Sommerce theme settings page (premium, by Sara_p at ThemeForest)
 *
 * @since 1.4
 */
if ( get_current_theme() == 'Sommerce' || get_template() == 'sommerce' ) {
	$menu_items['sommerce-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Sommerce Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=yiw_panel' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Sommerce Theme Settings', 'jsaba' ) )
	);
}  // end-if Sommerce


/**
 * Display link to active Dotos theme settings page (free, by Tung Do at DevPress Themes)
 *
 * @since 1.5
 */
if ( get_current_theme() == 'Dotos' || get_template() == 'dotos' ) {
	$menu_items['dotos-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Dotos Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=theme-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Dotos Theme Settings', 'jsaba' ) )
	);
}  // end-if Dotos


/**
 * Display link to active Good theme settings page (free, by Tung Do at DevPress Themes)
 *
 * @since 1.6
 */
if ( get_current_theme() == 'Good' || get_template() == 'good' ) {
	$menu_items['good-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Good Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=theme-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Good Theme Settings', 'jsaba' ) )
	);
}  // end-if Good


/**
 * Display link to active Suffusion theme settings page (free, by Sayontan Sinha)
 * Display link to active Suffusion Commerce Pack integration plugin settings/info page (free, by Sayontan Sinha)
 *
 * @since 1.6
 */
if ( get_current_theme() == 'Suffusion' || get_template() == 'suffusion' ) {
	$menu_items['suffusion-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Suffusion Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'themes.php?page=theme-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Suffusion Theme Settings', 'jsaba' ) )
	);
	/**
	 * Display link to active Suffusion Commerce Pack integration plugin settings/info page (free, by Sayontan Sinha)
	 *
	 * @since 1.6
	 */
	if ( class_exists( 'Suffusion_Commerce_Pack' ) ) {
		$menu_items['ext-suffusion-pack'] = array(
			'parent' => $extensions,
			'title'  => __( 'Suffusion Commerce Pack', 'jsaba' ),
			'href'   => admin_url( 'themes.php?page=suffusion-options-manager' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Suffusion Commerce Pack', 'jsaba' ) )
		);
	}
}  // end-if Suffusion Theme


/**
 * Display link to active Wardrobe theme settings page (premium, by ColorLabs & Company)
 *
 * @since 1.6
 */
if ( get_current_theme() == 'Wardrobe' || get_template() == 'wardrobe' ) {
	$menu_items['wardrobe-settings'] = array(
		'parent' => $jigoshopbar,
		'title'  => __( 'Wardrobe Theme Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=colabsthemes_options' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Wardrobe Theme Settings', 'jsaba' ) )
	);
}  // end-if Wardrobe
