# WP REST API V2 Custom Post Fields

[Shows CPT Custom Category image to the WP REST API V2 for posts.](https://wordpress.org/plugins/wp-rest-api-v2-custom-post-fields/)

* **Contributors:** [Torbjorn Zetterlund](https://wordpress.org/support/profile/vatsov)  
* **Tags:** [api](https://wordpress.org/plugins/tags/api), [json](https://wordpress.org/plugins/tags/json), [REST](https://wordpress.org/plugins/tags/rest), [rest-api](https://wordpress.org/plugins/tags/rest-api), [wp-api](https://wordpress.org/plugins/tags/wp-api), [advanced custom post fields](https://wordpress.org/plugins/tags/custom-post-types), [ACF](https://wordpress.org/plugins/tags/acf)  
* **Requires at least:** 4.3  
* **Tested up to:** 4.4.5  
* **Stable tag:** 0.2  
* **License:** [GPLv2 or later](http://www.gnu.org/licenses/gpl-2.0.html)  

<br>
- [Description](#description)
- [Installation](#installation)
- [Filters](#filters)
- [Changelog](#changelog)


Description
====

Setting up a Custom Post Type (CPT) for recipes, recipe category has been added, and you want to pull recipe category images through the WP V2 API to a mobile app. To add images use the plugin [Category and Taxonomy Image](https://wordpress.org/plugins/wp-custom-taxonomy-image/ "Category and Taxonomy Image") with the plugin [WP REST API](https://wordpress.org/plugins/rest-api/ "WP REST API"). 

Support and Requests please in [GitHub](https://github.com/tottaz/WP-API-V2-Recipe-Category-Images).  


Installation
====

This plugin requires having the following plugins installed and activated:
- [WP REST API](https://wordpress.org/plugins/rest-api/ "WP REST API")
- [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/ "Advanced Custom Fields")
- [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/ "Custom Post Type UI")

* **Manual Installation:**  
Upload the entire /wp-api-v2-recipe-category-images directory to the /wp-content/plugins/ directory.

* **Better Installation:**  
Go to Plugins > Add New in your WordPress admin and search for 'WP API V2 Recipe Category Images'.

Once installed, activate 'WP API V2 Recipe Category Images' from WordPress plugins dashboard page and you're ready to go.

This plugin works straight out of the box.


Endpoint
====
|-----------|
| /wp-json/wp/v2/recipe_category/


```

Changelog
====
#### 0.1 - (20 June 2016) ####
* Initial Release.

<br>
<br>
Props [Torbjorn Zetterlund](https://github.com/tottaz)
