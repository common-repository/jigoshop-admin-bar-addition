<?php 
/**
 * Main plugin file. This plugin adds useful admin links and resources for the Jigoshop Shop Plugin to the WordPress Toolbar / Admin Bar.
 *
 * @package   Jigoshop Admin Bar Addition
 * @author    David Decker
 * @link      http://twitter.com/#!/deckerweb
 * @copyright Copyright 2011-2012, David Decker - DECKERWEB
 *
 * @credits   Inspired and based on the plugin "WooThemes Admin Bar Addition" by Remkus de Vries @defries.
 * @link      http://remkusdevries.com/
 * @link      http://twitter.com/#!/defries
 *
 * Plugin Name: Jigoshop Admin Bar Addition
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/jigoshop-admin-bar-addition/
 * Description: This plugin adds useful admin links and resources for the Jigoshop Shop Plugin to the WordPress Toolbar / Admin Bar.
 * Version: 1.8
 * Author: David Decker - DECKERWEB
 * Author URI: http://deckerweb.de/
 * License: GPLv2
 * Text Domain: jsaba
 * Domain Path: /languages/
 */

/**
 * Setting constants
 *
 * @since 1.0
 */
define( 'JSABA_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );


add_action( 'init', 'ddw_jigoshop_aba_init' );
/**
 * Load the text domain for translation of the plugin
 * 
 * @since 1.0
 * @version 1.1
 */
function ddw_jigoshop_aba_init() {

	load_plugin_textdomain( 'jsaba', false, JSABA_PLUGIN_BASEDIR . '/languages/' );
}



add_filter( 'plugin_row_meta', 'ddw_jigoshop_aba_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0
 *
 * @param  $jsaba_links
 * @param  $jsaba_file
 * @return strings plugin links
 */
function ddw_jigoshop_aba_plugin_links( $jsaba_links, $jsaba_file ) {

	if ( !current_user_can( 'install_plugins' ) )
		return $jsaba_links;

	if ( $jsaba_file == JSABA_PLUGIN_BASEDIR . '/jigoshop-admin-bar-addition.php' ) {
		$jsaba_links[] = '<a href="http://wordpress.org/extend/plugins/jigoshop-admin-bar-addition/faq/" target="_new" title="' . __( 'FAQ', 'jsaba' ) . '">' . __( 'FAQ', 'jsaba' ) . '</a>';
		$jsaba_links[] = '<a href="http://wordpress.org/tags/jigoshop-admin-bar-addition?forum_id=10" target="_new" title="' . __( 'Support', 'jsaba' ) . '">' . __( 'Support', 'jsaba' ) . '</a>';
		$jsaba_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'jsaba' ) . '" target="_new" title="' . __( 'Donate', 'jsaba' ) . '">' . __( 'Donate', 'jsaba' ) . '</a>';
	}

	return $jsaba_links;
}


add_action( 'admin_bar_menu', 'ddw_jigoshop_aba_admin_bar_menu', 98 );
/**
 * Add new menu items to the WP Admin Bar.
 * 
 * @since 1.0
 *
 * @global mixed $wp_admin_bar 
 */
function ddw_jigoshop_aba_admin_bar_menu() {

	global $wp_admin_bar;
	global $jigoshop_db_version;

	/** Required WordPress cabability to display new admin bar entry */
	if ( ! current_user_can( 'install_plugins' ) || !is_admin_bar_showing() )
		return;

	/** Set unique prefix */
	$prefix = 'ddw-jigoshop-';
	
	/** Create parent menu item references */
	$jigoshopbar = $prefix . 'admin-bar';		// root level
	$support = $prefix . 'jssupport';			// sub level: support
	$jsknowledgebase = $prefix . 'jsknowledgebase';		// sub level: knowledgebase
	$jsknowledgebaseapi = $prefix . 'jsknowledgebaseapi';		// third level: js kb api
	$jigoshopsites = $prefix . 'jigoshopsites';		// sub level: js sites
	$jsaffiliates = $prefix . 'jsaffiliates';			// third level: js affiliates
	$jsextend = $prefix . 'jsextend';				// third level: js extend
	$settings = $prefix . 'settings';			// sub level: settings
	$products = $prefix . 'products';			// sub level: products
	$productvariants = $prefix . 'productvariants';		// sub level: product variants
	$coupons = $prefix . 'coupons';				// sub level: coupons
	$orders = $prefix . 'orders';				// sub level: orders
	$extensions = $prefix . 'extensions';			// sub level: extensions
	$extjsswao = $prefix . 'extjsswao';				// third level plugin extension: software add-on
	$extpideal = $prefix . 'extpideal';				// third level plugin extension: pronamic ideal
	
	/** Display these items also when Jigoshop plugin is not installed */
	$menu_items = array(
		// Support menu items
		'jssupport' => array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Jigoshop Support', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/',
			'meta'   => array( 'title' => __( 'Jigoshop Support', 'jsaba' ) )
		),
		'jsforum' => array(
			'parent' => $support,
			'title'  => __( 'Jigoshop Public Forum', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/discussions',
			'meta'   => array( 'title' => __( 'Jigoshop Public Forum', 'jsaba' ) )
		),
		'jsforumprofile' => array(
			'parent' => $support,
			'title'  => __( 'My Forum Profile &amp; Discussions', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/profile?all=1',
			'meta'   => array( 'title' => __( 'My Forum Profile &amp; Discussions', 'jsaba' ) )
		),
		'jssupportpremium' => array(
			'parent' => $support,
			'title'  => __( 'Jigoshop Premium Support', 'jsaba' ),
			'href'   => 'http://jigoshop.com/support/',
			'meta'   => array( 'title' => __( 'Jigoshop Premium Support', 'jsaba' ) )
		),
		'jssupportaccount' => array(
			'parent' => $support,
			'title'  => __( 'My User Account At Jigoshop.com', 'jsaba' ),
			'href'   => 'http://jigoshop.com/my-account/',
			'meta'   => array( 'title' => __( 'My User Account At Jigoshop.com', 'jsaba' ) )
		),
		'jssupportwporg' => array(
			'parent' => $support,
			'title'  => __( 'Free Support Forum (WP.org)', 'jsaba' ),
			'href'   => 'http://wordpress.org/tags/jigoshop?forum_id=10',
			'meta'   => array( 'title' => __( 'Free Support Forum (WP.org)', 'jsaba' ) )
		),
		'jsvideo' => array(
			'parent' => $support,
			'title'  => __( 'Official Video Channel', 'jsaba' ),
			'href'   => 'http://www.youtube.com/user/Jigoshop/videos?view=u',
			'meta'   => array( 'title' => __( 'Official Video Channel', 'jsaba' ) )
		),
		'jsvideomore' => array(
			'parent' => $support,
			'title'  => __( 'More Videos', 'jsaba' ),
			'href'   => 'http://vimeo.com/user5178120/videos',
			'meta'   => array( 'title' => __( 'More Videos', 'jsaba' ) )
		),
		// Knowledgebase menu items
		'jsknowledgebase' => array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Jigoshop Knowledge Base', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb',
			'meta'   => array( 'title' => __( 'Jigoshop Knowledge Base', 'jsaba' ) )
		),
		'jsknowledgebase-start' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Getting Started', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/getting-started',
			'meta'   => array( 'title' => __( 'Getting Started', 'jsaba' ) )
		),
		'jsknowledgebase-settings' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Jigoshop Settings', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/jigoshop-settings',
			'meta'   => array( 'title' => __( 'Jigoshop Settings', 'jsaba' ) )
		),
		'jsknowledgebase-products' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Creating Products', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/creating-products',
			'meta'   => array( 'title' => __( 'Creating Products', 'jsaba' ) )
		),
		'jsknowledgebase-using' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Using Jigoshop', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/managing-orders',
			'meta'   => array( 'title' => __( 'Using Jigoshop', 'jsaba' ) )
		),
		'jsknowledgebase-customizing' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Customize Jigoshop', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/shortcodes',
			'meta'   => array( 'title' => __( 'Customize Jigoshop', 'jsaba' ) )
		),
		'jsknowledgebaseapi' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Jigoshop API', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/actionfilter-reference',
			'meta'   => array( 'title' => __( 'Jigoshop API', 'jsaba' ) )
		),
		'jsknowledgebaseapi-hooks' => array(
			'parent' => $jsknowledgebaseapi,
			'title'  => __( 'Hook Reference', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/actionfilter-reference/actions',
			'meta'   => array( 'title' => __( 'Hook Reference', 'jsaba' ) )
		),
		'jsknowledgebaseapi-filters' => array(
			'parent' => $jsknowledgebaseapi,
			'title'  => __( 'Filter Reference', 'jsaba' ),
			'href'   => 'http://forum.jigoshop.com/kb/actionfilter-reference/filters',
			'meta'   => array( 'title' => __( 'Filter Reference', 'jsaba' ) )
		),
		'jsghwiki' => array(
			'parent' => $jsknowledgebase,
			'title'  => __( 'Jigoshop Wiki at GitHub', 'jsaba' ),
			'href'   => 'https://github.com/jigoshop/jigoshop/wiki',
			'meta'   => array( 'title' => __( 'Jigoshop Wiki at GitHub', 'jsaba' ) )
		),
		// Jigoshop HQ menu items
		'jigoshopsites' => array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Jigoshop HQ', 'jsaba' ),
			'href'   => 'http://jigoshop.com/',
			'meta'   => array( 'title' => __( 'Jigoshop HQ', 'jsaba' ) )
		),
		'jsblog' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'Official Blog', 'jsaba' ),
			'href'   => 'http://jigoshop.com/blog/',
			'meta'   => array( 'title' => __( 'Official Blog', 'jsaba' ) )
		),
		'jsshowcase' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'Showcase', 'jsaba' ),
			'href'   => 'http://jigoshop.com/showcase/',
			'meta'   => array( 'title' => __( 'Showcase', 'jsaba' ) )
		),
		'jsextend' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'Official Jigoshop Extensions', 'jsaba' ),
			'href'   => 'http://jigoshop.com/extend/',
			'meta'   => array( 'title' => __( 'Official Jigoshop Extensions', 'jsaba' ) )
		),
		'jsextend-themes' => array(
			'parent' => $jsextend,
			'title'  => __( 'Themes for Jigoshop', 'jsaba' ),
			'href'   => 'http://jigoshop.com/product-category/themes/',
			'meta'   => array( 'title' => __( 'Themes for Jigoshop', 'jsaba' ) )
		),
		'jsextend-plugins' => array(
			'parent' => $jsextend,
			'title'  => __( 'Plugin Extensions', 'jsaba' ),
			'href'   => 'http://jigoshop.com/product-category/extensions/',
			'meta'   => array( 'title' => __( 'Plugin Extensions', 'jsaba' ) )
		),
		'jsaffiliates' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'Jigoshop Affiliates Info', 'jsaba' ),
			'href'   => 'http://jigoshop.com/affiliates/',
			'meta'   => array( 'title' => __( 'Jigoshop Affiliates Info', 'jsaba' ) )
		),
		'jsaffiliates-login' => array(
			'parent' => $jsaffiliates,
			'title'  => __( 'Affiliates Login', 'jsaba' ),
			'href'   => 'http://jigoshop.hasoffers.com/',
			'meta'   => array( 'title' => __( 'Affiliates Login', 'jsaba' ) )
		),
		'jsbugs' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'Issues &amp; Bug Reports', 'jsaba' ),
			'href'   => 'https://github.com/jigoshop/jigoshop/issues',
			'meta'   => array( 'title' => __( 'Issues &amp; Bug Reports', 'jsaba' ) )
		),
		'jsdev' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'GitHub Repository Developer Center', 'jsaba' ),
			'href'   => 'https://github.com/jigoshop/jigoshop',
			'meta'   => array( 'title' => __( 'GitHub Repository Developer Center', 'jsaba' ) )
		),
		'jsccmarket' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'More premium extensions at CodeCanyon', 'jsaba' ),
			'href'   => 'http://ddwb.me/jscc',
			'meta'   => array( 'title' => __( 'More premium plugins/extensions at CodeCanyon Marketplace', 'jsaba' ) )
		),
		'jsplugins' => array(
			'parent' => $jigoshopsites,
			'title'  => __( 'More free plugins/extensions at WP.org', 'jsaba' ),
			'href'   => 'http://wordpress.org/extend/plugins/search.php?q=jigoshop',
			'meta'   => array( 'title' => __( 'More free plugins/extensions at WP.org', 'jsaba' ) )
		),
	);

	/** Display the following language specific items only for these locales: de_DE, de_AT, de_CH, de_LU */
	if ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) {

		// German public community support forum
		$menu_items['forum-de'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'German Support Forum', 'jsaba' ),
			'href'   => 'http://jigoshop.de/forum/',
			'meta'   => array( 'title' => __( 'German Support Forum', 'jsaba' ) )
		);

		// German language plugin - only if DE plugin not active
		if ( !class_exists( 'Jigoshop_de_DE' ) ) {
			$menu_items['jslanguages-de'] = array(
				'parent' => $jigoshopbar,
				'title'  => __( 'German language plugin', 'jsaba' ),
				'href'   => 'http://wordpress.org/extend/plugins/jigoshop-de/',
				'meta'   => array( 'title' => __( 'German language plugin for Jigoshop - with complete translations and formal/informal version support!', 'jsaba' ) )
			);
		}

		// German language packs
		$menu_items['languages-de'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'German language files', 'jsaba' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/jigoshop-und-extensions/',
			'meta'   => array( 'title' => __( 'German language files', 'jsaba' ) )
		);

	}  // end-if locale-specific

	/** Check for active Jigoshop version to define settings links */
	if ( JIGOSHOP_VERSION < 1202130 ) {
		$js_aurl_settings = admin_url( 'admin.php?page=settings' );
		$js_aurl_sysinfo = admin_url( 'admin.php?page=sysinfo' );
		$js_aurl_attributes = admin_url( 'edit.php?post_type=product&page=attributes' );
	} else {
		$js_aurl_settings = admin_url( 'admin.php?page=jigoshop_settings' );
		$js_aurl_sysinfo = admin_url( 'admin.php?page=jigoshop_sysinfo' );
		$js_aurl_attributes = admin_url( 'edit.php?post_type=product&page=jigoshop_attributes' );
	}  // end-if Jigoshop check

	/** Show these items only if Jigoshop plugin is actually installed */
	if ( function_exists ( 'jigoshop_init' ) ) {
		// Jigoshop settings menu items
		$menu_items['settings'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Shop Overview &amp; Reports', 'jsaba' ),
			'href'   => admin_url( 'admin.php?page=jigoshop' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Shop Overview &amp; Reports', 'jsaba' ) )
		);
		$menu_items['s-general-settings'] = array(
			'parent' => $settings,
			'title'  => __( 'General Settings', 'jsaba' ),
			'href'   => $js_aurl_settings,
			'meta'   => array( 'target' => '', 'title' => __( 'General Settings', 'jsaba' ) )
		);
		$menu_items['s-widgets'] = array(
			'parent' => $settings,
			'title'  => __( 'Jigoshop Widgets', 'jsaba' ),
			'href'   => admin_url( 'widgets.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Jigoshop Widgets', 'jsaba' ) )
		);
		$menu_items['s-sysinfo'] = array(
			'parent' => $settings,
			'title'  => __( 'System &amp Server Info', 'jsaba' ),
			'href'   => $js_aurl_sysinfo,
			'meta'   => array( 'target' => '', 'title' => __( 'System &amp Server Info', 'jsaba' ) )
		);
		// Jigoshop products menu items
		$menu_items['products'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Products', 'jsaba' ),
			'href'   => admin_url( 'edit.php?post_type=product' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Products', 'jsaba' ) )
		);
		$menu_items['p-add-product'] = array(
			'parent' => $products,
			'title'  => __( 'Add new product', 'jsaba' ),
			'href'   => admin_url( 'post-new.php?post_type=product' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new product', 'jsaba' ) )
		);
		$menu_items['p-product-categories'] = array(
			'parent' => $products,
			'title'  => __( 'Product Categories', 'jsaba' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=product_cat&post_type=product' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Product Categories', 'jsaba' ) )
		);
		$menu_items['p-product-tags'] = array(
			'parent' => $products,
			'title'  => __( 'Product Tags', 'jsaba' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=product_tag&post_type=product' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Product Tags', 'jsaba' ) )
		);
		$menu_items['productvariants'] = array(
			'parent' => $products,
			'title'  => __( 'Product Variants', 'jsaba' ),
			'href'   => admin_url( 'edit.php?post_type=product_variation' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Product Variants', 'jsaba' ) )
		);
		$menu_items['p-product-variants'] = array(
			'parent' => $products,
			'title'  => __( 'Attributes (for Product Variants)', 'jsaba' ),
			'href'   => $js_aurl_attributes,
			'meta'   => array( 'target' => '', 'title' => __( 'Attributes (for Product Variants)', 'jsaba' ) )
		);
		// Jigoshop orders menu items
		$menu_items['orders'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Orders', 'jsaba' ),
			'href'   => admin_url( 'edit.php?post_type=shop_order' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Orders', 'jsaba' ) )
		);
		$menu_items['o-add-order'] = array(
			'parent' => $orders,
			'title'  => __( 'Add new order', 'jsaba' ),
			'href'   => admin_url( 'post-new.php?post_type=shop_order' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new order', 'jsaba' ) )
		);

		/**
		 * Display last main item in the menu for active extensions/plugins
		 * ATTENTION: This is where plugins/extensions hook in on the sub-level hierarchy
		 *
		 * @since 1.0
		 */
		$menu_items['extensions'] = array(
			'parent' => $jigoshopbar,
			'title'  => __( 'Active Extensions', 'jsaba' ),
			'href'   => admin_url( 'plugins.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Manage Exchange Rates', 'jsaba' ) )
		);

	}  // end-if Jigoshop conditional


	/**
	 * Display links to active Jigoshop specific themes settings' pages
	 *
	 * @since 1.0
	 * @version 1.1
	 */
		/** Include plugin file with theme support links */
		require_once( 'jsaba-themes.php' );


	/**
	 * Display links to active Jigoshop plugins/extensions settings' pages
	 *
	 * @since 1.2
	 * @version 1.1
	 */
		/** Include plugin file with plugin support links */
		require_once( 'jsaba-plugins.php' );


	/** Allow menu items to be filtered, but pass in parent menu item IDs */
	$menu_items = (array) apply_filters( 'ddw_jigoshop_aba_menu_items', $menu_items, $prefix, $jigoshopbar, $support, $jsknowledgebase, $jsknowledgebaseapi, $jigoshopsites, $jsaffiliates, $jsextend, $settings, $products, $productvariants, $coupons, $orders, $reports, $extensions, $extjsswao, $extpideal );


	/** Add the Jigoshop top-level item */
	$wp_admin_bar->add_menu( array(
		'id'    => $jigoshopbar,
		'title' => __( 'Jigoshop', 'jsaba' ),
		'href'  => admin_url( 'admin.php?page=jigoshop' ),
		'meta'  => array( 'class' => 'icon-jigoshop', 'title' => __( 'Jigoshop', 'jsaba' ) )
	) );


	/** Loop through the menu items */
	foreach ( $menu_items as $id => $menu_item ) {
		
		// Add in the item ID
		$menu_item['id'] = $prefix . $id;

		// Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $menu_item['meta']['target'] ) )		
			$menu_item['meta']['target'] = '_blank';

		// Add class to links that open up in a new window/tab
		if ( '_blank' === $menu_item['meta']['target'] ) {
			if ( ! isset( $menu_item['meta']['class'] ) )
				$menu_item['meta']['class'] = '';
			$menu_item['meta']['class'] .= $prefix . 'jsaba-new-tab';
		}

		// Add item
		$wp_admin_bar->add_menu( $menu_item );

	}  // end foreach

}  // end of main function


add_action( 'wp_head', 'ddw_jigoshop_aba_admin_style' );
add_action( 'admin_head', 'ddw_jigoshop_aba_admin_style' );
/**
 * Add the styles for new WP Admin Bar entry
 * 
 * @since 1.0
 * @version 1.1
 */
function ddw_jigoshop_aba_admin_style() {

	/** No styles if admin bar is disabled */
	if ( ! is_admin_bar_showing() )
		return;

	/**
	 * Add CSS styles to wp_head/admin_head
	 * Check against WP 3.3+ only function "wp_editor"
	 */
	/** Styles for WordPress 3.3 or higher */
	if ( function_exists( 'wp_editor' ) ) {

		?>
		<style type="text/css">
			#wpadminbar.nojs .ab-top-menu > li.menupop.icon-jigoshop:hover > .ab-item,
			#wpadminbar .ab-top-menu > li.menupop.icon-jigoshop.hover > .ab-item,
			#wpadminbar.nojs .ab-top-menu > li.menupop.icon-jigoshop > .ab-item,
			#wpadminbar .ab-top-menu > li.menupop.icon-jigoshop > .ab-item {
				 background-image: url(<?php echo plugins_url( 'jigoshop/assets/images/icons/jigoshop-icon.png',
		dirname( __FILE__ ) ); ?>);
				background-repeat: no-repeat;
				background-position: 0.85em 50%;
				padding-left: 30px;
			}
			#wp-admin-bar-ddw-jigoshop-settings,
			#wp-admin-bar-ddw-jigoshop-extensions {
				border-top: 1px solid;
			}
			#wp-admin-bar-ddw-jigoshop-forum-de,
			#wp-admin-bar-ddw-jigoshop-jslanguages-de {
				background-color: #ffffcc !important;
			}
			#wp-admin-bar-ddw-jigoshop-forum-de:hover,
			#wp-admin-bar-ddw-jigoshop-jslanguages-de:hover {
				background-color: #d9e3ed !important;
			}
		</style>
		<?php

	/** Styles for WordPress prior 3.3 */
	} else {

		?>
		<style type="text/css">
			#wpadminbar .icon-jigoshop > a {
				background: url(<?php echo plugins_url( 'jigoshop/assets/images/icons/jigoshop-icon.png', dirname( __FILE__ ) ); ?>) no-repeat 0.85em 50% transparent;
				padding-left: 30px;
			}
			#wp-admin-bar-ddw-jigoshop-settings,
			#wp-admin-bar-ddw-jigoshop-extensions {
				border-top: 1px solid;
			}
			#wp-admin-bar-ddw-jigoshop-forum-de,
			#wp-admin-bar-ddw-jigoshop-jslanguages-de {
				background-color: #ffffcc !important;
			}
			#wp-admin-bar-ddw-jigoshop-forum-de:hover,
			#wp-admin-bar-ddw-jigoshop-jslanguages-de:hover {
				background-color: #d9e3ed !important;
			}
		</style>
		<?php

	}  // end if else WP check

}  // end of function ddw_jigoshop_aba_admin_style
