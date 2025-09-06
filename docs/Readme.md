# Prod Gallery Plugin

## Purpose

Displaying your Woocommerce product list in grid format.

## Installation prerequisites

* Wordpress 6.8.x oldal
* Woocommerce 10.1.x plugin

## Installation guide

Meglévő Wordpress oldalra, melyre fel lett telepítve a woocommerce plugin is, a következő képpen lehet feltelepíteni:

### Free version installation

    1. WP telepítő részénél
        1.1. Bal oldali menüben a bővítmény hozzáadása menüpont kiválasztása
        1.2. A megjelent oldalon meg kell nyomni a Bővítmény feltöltését
        1.3. Ki kell választani a woo-gallery.zip fájlt, s jóvá kell hagyni a feltöltést.
        1.4. Miután a woocommerce is be van kapcsolva, be kell kapcsolni ezt a plugint is.
        1.5. S kész is az ingyenes verzió feltöltése.

    2. FTP serverrel
        2.1. wp-content/plugins könyvtár alá fel kell tölteni a kicsomagolt woo-gallery.zip fájlt.
        2.2. Az admin oldalon a Telepített bővítmények ki kell választani a menüből
        2.3. Az így megjelent oldalon, ki kell keresni a Prod Gallery bővítményt be kell kapcsolni
        2.4. S kész is az ingyenes verzió feltöltése.

## User manual

### Free version

Short kódot tud az ember használni, melynek neve [woo-gallery].

#### Possible attributes

* id: unique identifier for the grid list
    * Example:
        * [woo-gallery id=’gallery1’]
* cat: slugs of product categories you want to filter by
    * Example:
        * [woo-gallery cat=’kategoria1 kategoria2 kategoria3’]
* order: whatever value you want to list by
    * Example:
        * [woo-gallery order=’name’]
* by: Whether you want to list in descending or ascending order, there can be two values:
    * asc: ascending
    * desc: descending
    * Example:
        * [woo-gallery order=’name’ by=’asc’]
* limit: Maximum number of products to list at once
    * Example:
        * [woo-gallery limit=’10’]
* page: If you specify a limit value, you can specify which "page" to display.
    * Example:
        * [woo-gallery limit=’10’ page=’3’]
            * Meaning: List of elements from element 21 to element 30.
        * [woo-gallery order=’name’ by=’desc’ limit=’10’ page=’3’]
            * Meaning: List of items from item 21 to item 30, sorted in descending order by product name.