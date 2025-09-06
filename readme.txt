=== Prod Gallery ===
Contributors: estampel
Donate link: https://github.com/stamie
Tested:  6.8
Stable tag: 1.1.2
License: GPLv3
License URI: https://www.gnu.org/licenses/quick-guide-gplv3.html

Displaying your Woocommerce product list in grid format.

=== Description ===

Displaying your Woocommerce product list in grid format.

=== Installation ===

* Required:

    * Wordpress 6.8.x oldal
    * Woocommerce 10.1.x plugin

* Installation guide

It can be installed on an existing Wordpress site that also has the WooCommerce plugin installed as follows:

* Free version installation

1. In the WP installation section
    1.1. Select the Add Extension menu item in the left menu
    1.2. On the page that appears, click Upload Extension
    1.3. Select the prod-gallery.zip file and confirm the upload.
    1.4. After woocommerce is enabled, this plugin must also be enabled.
    1.5. And you are done uploading the free version.

2. With FTP server
    2.1. Upload the unpacked prod-gallery.zip file to the wp-content/plugins directory.
    2.2. On the admin page, select Installed Extensions from the menu
    2.3. On the page that appears, search for the Prod Gallery extension and enable it
    2.4. And you are done uploading the free version.

=== User manual ===

* Free version

Short kódot tud az ember használni, melynek neve [prod-gallery].

** Possible attributes

* id: unique identifier for the grid list
    * Example:
        * [prod-gallery id=’gallery1’]
* cat: slugs of product categories you want to filter by
    * Example:
        * [prod-gallery cat=’kategoria1 kategoria2 kategoria3’]
* order: whatever value you want to list by
    * Example:
        * [prod-gallery order=’name’]
* by: Whether you want to list in descending or ascending order, there can be two values:
    * asc: ascending
    * desc: descending
    * Example:
        * [prod-gallery order=’name’ by=’asc’]
* limit: Maximum number of products to list at once
    * Example:
        * [prod-gallery limit=’10’]
* page: If you specify a limit value, you can specify which "page" to display.
    * Example:
        * [prod-gallery limit=’10’ page=’3’]
            * Meaning: List of elements from element 21 to element 30.
        * [prod-gallery order=’name’ by=’desc’ limit=’10’ page=’3’]
            * Meaning: List of items from item 21 to item 30, sorted in descending order by product name.