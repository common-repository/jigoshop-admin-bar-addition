<?php
/**
 * Display links to active Jigoshop plugins/extensions settings' pages
 *
 * @package    Jigoshop Admin Bar Addition
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2011-2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/jigoshop-admin-bar-addition/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.2
 * @version 1.1
 */

/**
 * Multi Currency Lite For Jigoshop settings page (free, by Steven Clark at GitHub)
 *
 * @since 1.2
 */
if ( class_exists( 'Jigoshop_Mutli_Currency' ) ) {
	$menu_items['ext-multicurrency-lite'] = array(
		'parent' => $extensions,
		'title'  => __( 'Manage Exchange Rates', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jigoshop_exchange_rates_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Manage Exchange Rates', 'jsaba' ) )
	);
	$menu_items['s-multicurrency-lite'] = array(
		'parent' => $settings,
		'title'  => __( 'Manage Exchange Rates', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jigoshop_exchange_rates_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Manage Exchange Rates', 'jsaba' ) )
	);
}  // end-if Multi Currency Lite


/**
 * Jigoshop Additional Taxonomy Content settings page (free, by Steven Clark at GitHub)
 *
 * @since 1.5
 */
if ( class_exists( 'Jigoshop_Additonal_Taxonomy_Content' ) ) {
	$menu_items['ext-additional-taxcontent'] = array(
		'parent' => $extensions,
		'title'  => __( 'Additional Taxonomy Content', 'jsaba' ),
		'href'   => admin_url( 'edit.php?post_type=product&page=jigoshop_taxonomy_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Additional Taxonomy Content', 'jsaba' ) )
	);
	$menu_items['p-additional-taxcontent'] = array(
		'parent' => $products,
		'title'  => __( 'Additional Taxonomy Content', 'jsaba' ),
		'href'   => admin_url( 'edit.php?post_type=product&page=jigoshop_taxonomy_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Additional Taxonomy Content', 'jsaba' ) )
	);
}  // end-if Additional Taxonomy Content


/**
 * Jigoshop Delivery Notes settings page (free, by Steven Clark + piffpaffpuff at GitHub)
 *
 * @since 1.2
 */
if ( class_exists( 'Jigoshop_Delivery_Notes' ) ) {
	$menu_items['ext-delivery-notes'] = array(
		'parent' => $extensions,
		'title'  => __( 'Delivery Notes Settings', 'jsaba' ),
		'href'   => admin_url( 'edit.php?post_type=shop_order&page=jigoshop_delivery_notes_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Delivery Notes Settings', 'jsaba' ) )
	);
	$menu_items['o-delivery-notes'] = array(
		'parent' => $orders,
		'title'  => __( 'Delivery Notes Settings', 'jsaba' ),
		'href'   => admin_url( 'edit.php?post_type=shop_order&page=jigoshop_delivery_notes_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Delivery Notes Settings', 'jsaba' ) )
	);
}  // end-if Jigoshop Delivery Notes


/**
 * Jigoshop Software Add-On settings pages (free, by Joachim Kudish at GitHub)
 *
 * @since 1.2
 */
if ( class_exists( 'jigoshop_software' ) ) {
	$menu_items['extjsswao'] = array(
		'parent' => $extensions,
		'title'  => __( 'Jigoshop Software Add-On', 'jsaba' ),
		'href'   => admin_url( '' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Jigoshop Software Add-On', 'jsaba' ) )
	);
	$menu_items['extjsswao-stats'] = array(
		'parent' => $extjsswao,
		'title'  => __( 'Stats', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jgs_stats' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Stats', 'jsaba' ) )
	);
	$menu_items['ext-software-addon-stats'] = array(
		'parent' => $settings,
		'title'  => __( 'Software Add-On: Stats', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jgs_stats' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Software Add-On: Stats', 'jsaba' ) )
	);
	$menu_items['extjsswao-import'] = array(
		'parent' => $extjsswao,
		'title'  => __( 'Import', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jgs_import' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Import', 'jsaba' ) )
	);
	$menu_items['ext-software-addon-import'] = array(
		'parent' => $settings,
		'title'  => __( 'Software Add-On: Import', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=jgs_import' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Software Add-On: Import', 'jsaba' ) )
	);
}  // end-if Jigoshop Software Add-On


/**
 * Pronamic iDEAL settings pages (free, by Pronamic)
 *
 * @since 1.6
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'pronamic-ideal/pronamic-ideal.php' ) ) || class_exists( 'Pronamic_IDeal_IDeal' ) ) {
	$menu_items['extpideal'] = array(
		'parent' => $extensions,
		'title'  => __( 'Pronamic iDEAL Payment Gateway', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pronamic iDEAL Payment Gateway', 'jsaba' ) )
	);
	$menu_items['ext-pideal-payments'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Payments', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_payments' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Payments', 'jsaba' ) )
	);
	$menu_items['ext-pideal-settings'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Settings', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings', 'jsaba' ) )
	);
	$menu_items['ext-pideal-pages-generator'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Pages Generator', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_pages_generator' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Pages Generator', 'jsaba' ) )
	);
	$menu_items['ext-pideal-variants'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Variants', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_variants' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Variants', 'jsaba' ) )
	);
	$menu_items['ext-pideal-documentation'] = array(
		'parent' => $extpideal,
		'title'  => __( 'Documentation', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=pronamic_ideal_documentation' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Documentation', 'jsaba' ) )
	);
}  // end-if Pronamic iDEAL


/**
 * Affiliates Jigoshop Integration Light (free, by Karim Rahimpur)
 *
 * @since 1.7
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'affiliates-jigoshop-light/affiliates-jigoshop-light.php' ) ) || class_exists( 'Affiliates_Jigoshop_Light_Integration' ) ) {
	$menu_items['ext-affiliates-jslight'] = array(
		'parent' => $extensions,
		'title'  => __( 'Affiliates Integration Light', 'jsaba' ),
		'href'   => admin_url( 'admin.php?page=affiliates-admin-jigoshop-light' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Affiliates Integration Light', 'jsaba' ) )
	);
}  // end-if Affiliates Jigoshop Integration Lght


/**
 * Jigoshop Store Toolkit (free, by Visser Labs)
 *
 * @since 1.7
 */
if ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'jigoshop-store-toolkit/store-toolkit.php' ) ) || function_exists( 'jigo_st_init' ) ) {
	$menu_items['ext-store-toolkit'] = array(
		'parent' => $extensions,
		'title'  => __( 'Jigoshop Store Toolkit', 'jsaba' ),
		'href'   => admin_url( 'tools.php?page=jigo_st' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Jigoshop Store Toolkit', 'jsaba' ) )
	);
}  // end-if Jigoshop Store Toolkit
