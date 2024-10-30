=== Jigoshop Admin Bar Addition ===
Contributors: daveshine, deckerweb
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, adminbar, admin bar, jigoshop, administration, resources, links, shop, shop manager, deckerweb, ddwtoolbar
Requires at least: 3.1
Tested up to: 3.4.1
Stable tag: 1.8

This plugin adds useful admin links and resources for the Jigoshop Shop Plugin to the WordPress Toolbar / Admin Bar.

== Description ==

This **small and lightweight plugin** just adds a lot Jigoshop related resources to your toolbar / admin bar. Also links to all settings pages of the plugin are added making life for shop administrators/ webmasters a lot easier. So you might just switch from the fontend of your site to 'Shop Settings' page etc.

As the name suggests this plugin is **intended towards admins/ webmasters/ shop managers**. The new admin bar entries will only be displayed if the current user has the WordPress capability of `install_plugins`. (Note: I am open for suggestions here if this should maybe changed to a more suitable capability.)

= Plugin/ Theme Support =
*At this time the plugin out of the box supports also links to settings pages of some Jigoshop specific themes:*

* Official Themes: "Jigotheme", "Corellian", "Origin", "Serenum", "Overload" (all premium, [by Jigowatt](http://jigoshop.com/product-category/themes/))
* Theme: "Animal House" (premium, [by Jami Gibbs](http://jamigibbs.com/) at ThemeForest)
* Theme: "FreshShop" (premium, [by Jami Gibbs](http://jamigibbs.com/) at ThemeForest)
* Theme: "Sommerce" (premium, by Sara_p at ThemeForest)
* Theme: "Wardrobe" (premium, by [ColorLabs & Company](http://colorlabsproject.com/))
* Theme: ["Skeleton" (free, by Simple Themes)](http://www.simplethemes.com/blog/entry/skeleton-wordpress-theme)
* Theme: ["Dotos" (free, by Tung Do at DevPress Themes)](http://devpress.com/themes/dotos)
* Theme: ["Good" (free, by Tung Do at DevPress Themes)](http://devpress.com/themes/good)
* Theme: ["Suffusion" (free, by Sayontan Sinha)](http://wordpress.org/extend/themes/suffusion)
* Plugin extension: ["Pronamic iDEAL" Payment Gateway (free, by Pronamic, NL)](http://wordpress.org/extend/plugins/pronamic-ideal/)
* Plugin extension: ["Jigoshop Store Toolkit" (free, by Visser Labs)](http://wordpress.org/extend/plugins/jigoshop-store-toolkit/)
* Plugin extension: ["Jigoshop Delivery Notes" (free, by Steven Clark + piffpaffpuff at GitHub)](https://github.com/piffpaffpuff/jigoshop-delivery-notes)
* Plugin extension: ["Multi Currency Lite For Jigoshop" (free, by Steven Clark at GitHub)](https://github.com/steveclarkcouk/Currency-Converter-Jigoshop)
* Plugin extension: ["Jigoshop Additional Taxonomy Content" (free, by Steven Clark at GitHub)](https://github.com/steveclarkcouk/Jigoshop-Additional-Taxonomy-Content)
* Plugin extension: ["Jigoshop Software Add-On" (free, by Joachim Kudish at GitHub)](https://github.com/jkudish/JigoShop-Software-Add-on)
* Plugin extension: ["Affiliates Jigoshop Integration Light" (free, by Karim Rahimpur)](http://wordpress.org/extend/plugins/affiliates-jigoshop-light/)
* Integration plugin: ["Suffusion Commerce Pack" (free, by Sayontan Sinha)](http://wordpress.org/extend/plugins/suffusion-commerce-pack/)

*More support is planned as there are new releases of extensions/themes but I only could include what I have or get from plugin/theme authors to test.*
*Your plugin/ theme? - [Just contact me with specific data](http://genesisthemes.de/en/contact/)*

= Special Features =
* Not only supporting official Jigoshop sites ALSO third-party and user links - so just the whole Jigoshop ecosystem :)
* When German locales are active (de_DE, de_AT, de_CH, de_LU):
 * Link to German language/translation plugin
 * Link to downloadable German language packs
 * Link to independent German Jigoshop forum
* *NOTE:* I would be happy to add more language/locale specific resources and more useful third-party links - just contact me!

= Localization =
* English (default) - always included
* German - always included
* .pot file (`jsaba.pot`) for translators is also always included :)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

Credit where credit is due: This plugin here is inspired and based on the work of Remkus de Vries @defries and his awesome "WooThemes Admin Bar Addition" plugin.

[A plugin from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Drop me a line [@deckerweb](http://twitter.com/deckerweb) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/deckerweb.service)
* Or follow me on [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/users/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)

== Installation ==

1. Upload the entire `jigoshop-admin-bar-addition` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your admin bar and enjoy using the new links there :)
4. Go and manage your shop - good luck with sales :)

= Requirements =
* WordPress 3.1 or higher (latest version always recommended, WP 3.3+)
* Jigoshop 0.9.9.3+ or higher (latest version always recommended)

= Compatibility =
* Settings links Jigoshop v1.1+ supported!
* Also settings links in Jigoshop until version 1.0 (or lower) also supportet! (dynamic switching/detection)
* WordPress versions 3.1 - 3.4-alpha

== Frequently Asked Questions ==

= How are new resources being added to the admin bar? =
Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and I'll add the link if it is useful for admins/ webmasters and the Jigoshop community.

= How could my plugin/extension or theme options page be added to the admin bar links? =
This is possible of course and highly welcomed! Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and we sort out the details!
Particularly, I need the admin url for the primary options page (like so `wp-admin/admin.php?page=foo`) - this is relevant for both, plugins and themes. For themes then I also need the correct name defined in the stylesheet (like so `Footheme`) and the correct folder name (like so `footheme-folder`) because this would be the template name when using with child themes. (I don't own all the premium stuff myself yet so you're more than welcomed to help me out with these things. Thank you!)

= There are still some other plugins/ extensions/ add-ons for Jigoshop out there why aren't these included by default? =
Simple answer: The settings of these add-ons are added directly to the various Jigoshop settings pages or tabs and have no anchor to link to. So linking/ adding is just impossible.

== Screenshots ==

1. Jigoshop Toolbar / Admin Bar Addition in default state (running with WordPress 3.3)
2. Jigoshop Toolbar / Admin Bar Addition in action - primary level (running with WordPress 3.3)
3. Jigoshop Toolbar / Admin Bar Addition in action - a secondary level (running with WordPress 3.3)

== Changelog ==

= 1.8 =
* Maintenance release.
* UPDATE: Made plugin compatible with new settings links introduced with Jigoshop v1.1 - plugin is still backwards compatible with older Jigoshop versions (dynamic switching/detection!)
* NEW: Added links to all sub-categories of the official Jigoshop Knowledgebase making access to documentation even faster and more comfortable
* BUGFIX: Fixed conditional checks for German language plugin
* UPDATE: Improved and updated readme.txt file
* UDAPTE: Updated German translations and also the .pot file for all translators!

= 1.7 =
* Added more Jigoshop official and related resources:
 * NEW: Link to user account at Jigoshop.com
 * NEW: Link to forum profile - own discussions etc.
 * NEW: Links to new Jigoshop Affiliate program
 * NEW: Link to small wiki at GitHub platform
 * NEW: Added sub-level links to official themes and extensions listings
 * NEW: Link to Jigoshop extensions at CodeCanyon Marketplace
* Added more plugin support:
 * NEW: Added language plugin support for my own ["Jigoshop German (de_DE)" (free, by David Decker)](http://wordpress.org/extend/plugins/jigoshop-de/)
 * NEW: Added plugin extension support for ["Jigoshop Store Toolkit" (free, by Visser Labs)](http://wordpress.org/extend/plugins/jigoshop-store-toolkit/)
 * NEW: Added plugin extension support for ["Affiliates Jigoshop Integration Light" (free, by Karim Rahimpur)](http://wordpress.org/extend/plugins/affiliates-jigoshop-light/)
* CODE: Splitted code into more files for better maintenance - plugin and theme support now have their own file
* CODE: Improvement - hooked loading call for textdomain into init hook for fullfilling standard
* CODE: Minor code/documentation improvements and tweaks
* UPDATE: Updated German translations and also the .pot file for all translators!

= 1.6 =
* Added theme support for "Wardrobe" (premium, by ColorLabs & Company)
* Added theme support for ["Good" (free, by Tung Do at DevPress Themes)](http://devpress.com/themes/good)
* Added theme support for ["Suffusion" (free, by Sayontan Sinha)](http://wordpress.org/extend/themes/suffusion)
* Added plugin extension support for ["Pronamic iDEAL" Payment Gateway (free, by Pronamic, NL)](http://wordpress.org/extend/plugins/pronamic-ideal/)
* Added integration plugin support for "Suffusion Commerce Pack" (free, by Sayontan Sinha)
* Updated German translations and also the .pot file for all translators!

= 1.5 =
* Corrected "Extensions" link to new direction
* Added link to official Jigoshop Video Channel on YouTube
* Added plugin support for ["Jigoshop Additional Taxonomy Content" (free, by Steven Clark at GitHub)](https://github.com/steveclarkcouk/Jigoshop-Additional-Taxonomy-Content)
* Added theme support for ["Dotos" (free, by Tung Do at DevPress Themes)](http://devpress.com/themes/dotos)
* Added theme support for "Serenum" and "Overload" (both premium, [by Jigowatt](http://jigoshop.com/product-category/themes/))
* Updated readme.txt file - added new "Toolbar" wording introduced with WordPress 3.3 (formerly known as the Admin Bar)
* Updated German translations and also the .pot file for all translators!
* Updated screenshots to new WordPress 3.3 outfit
* Added banner image on WordPress.org for better plugin branding :)

= 1.4 =
* Added theme support for "Sommerce" (premium, by Sara_p at ThemeForest)
* Minor code/ code documenation tweaks
* Updated German translations and also the .pot file for all translators!

= 1.3 =
* Fixed Product Variants & Attributes links
* Fixed display of first level icon on mouse-hover with WordPress 3.3 - props to [Dominik Schilling](http://wpgrafie.de/) [@ocean90](http://twitter.com/ocean90) for great help with the CSS!
* Updated the screenshots with fixed first-level icon
* Updated and improved readme.txt file
* Updated German translations and also the .pot file for all translators!
* Now I'd call this some fully optimized release - enjoy :-)

= 1.2 =
* Added plugin support for "Jigoshop Delivery Notes" (free, by Steven Clark + piffpaffpuff at GitHub)
* Added plugin support for "Multi Currency Lite For Jigoshop" (free, by Steven Clark at GitHub)
* Added plugin support for "Jigoshop Software Add-On" (free, by Joachim Kudish at GitHub)
* Added tooltips to all Admin Bar elements
* Updated German translations and also the .pot file for all translators!

= 1.1 =
* Added theme support for "Animal House" (premium, by JamiGibbs at ThemeForest)
* Added theme support for "FreshShop" (premium, by JamiGibbs at ThemeForest)
* Added theme support for "Skeleton" (free, by Simple Themes)
* Added free & independent German Jigoshop user forum (only displayed for German locales!)
* Optimized conditional check for themes so that also child themes of these parent themes will work
* Updated readme.txt file here with new sections "Special Features" and "Credits"
* Updated German translations and also the .pot file for all translators!

= 1.0.1 =
* Just fixed the Extensions typo (Yes, it happens sometimes...)

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.8 =
Minor changes - Updated settings links; added more official resource links. Fixed conditionals for language plugins. Also, updated .pot file for translators together with German translations.

= 1.7 =
Several additions and improvements - Added new Jigoshop resource links and refined some existing ones. Further, added plugin support for 3 more free plugins. Some code tweaks and improvements. Also, updated .pot file for translators together with German translations.

= 1.6 =
Added theme support for more themes, 1 premium and 2 free, also added support for 2 more plugins. Updated .pot file for translators together with German translations.

= 1.5 =
Added new Video link and corrected Extensions link. Added theme support for 1 more free plugin, 1 free and 2 premium themes. Updated readme.txt file and also .pot file for translators together with German translations as well as the screenshots.

= 1.4 =
Added theme support for another third-party premium theme. A few minor code tweaks and also updated .pot file for translators together with German translations.

= 1.3 =
Fixed the Product Variants & Attributes links. Fixed first-level icon display in WP 3.3.

= 1.2 =
Added plugin support for 3 free extensions from GitHub repository. Added tooltips to all Admin Bar elements. Updated .pot file for translators and German translations.

= 1.1 =
Added theme support for 4 premium/free themes. Added link to independent German forum. Also updated conditional code for theme checks to include possible child themes. Updated .pot file for translators and German translations.

= 1.0.1 =
Just fixed the Extensions typo (Yes, it happens sometimes...)

= 1.0 =
Just released into the wild.

== Translations ==

* English - default, always included
* German: Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/jigoshop-und-extensions/#jigoshop-admin-bar-addition)

*Note:* All my plugins are localized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/).

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the Jigoshop shop managers out there to make their daily shop admin life a bit easier. I'll try to add more plugin/theme support if it makes some sense. So stay tuned :).

== Credits ==
* Thanx to [Jami Gibbs](http://jamigibbs.com/) [@JamiGibbs](http://twitter.com/JamiGibbs) for supporting the plugin with her premium themes for Jigoshop
* Thanx to the team of [ColorLabs & Company](http://colorlabsproject.com/) for supporting the plugin with their premium theme for Jigoshop
* Thanx to [Dominik Schilling](http://wpgrafie.de/) [@ocean90](http://twitter.com/ocean90) for great help with the CSS for the first level icon in WordPress 3.3!
