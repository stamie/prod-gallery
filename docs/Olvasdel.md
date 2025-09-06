# Prod Gallery Plugin

## Cél

Woocommerce termékeinek listáját grides formában való listázása.

## Telepítési előfeltételek

* Wordpress 6.8.x oldal
* Woocommerce 10.1.x plugin

## Telepítési útmutató

Meglévő Wordpress oldalra, melyre fel lett telepítve a woocommerce plugin is, a következő képpen lehet feltelepíteni:

### Ingyenes verzió telepítése

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

## Használati útmutató

### Ingyenes verzió

Short kódot tud az ember használni, melynek neve [woo-gallery].

#### Lehetséges attribútumok

* id: egyedi azonosítója a grid listának
    * Pl
        * [woo-gallery id=’gallery1’]
* cat: termék kategóriák slugjai, amire szűrni akar
    * Pl:
        * [woo-gallery cat=’kategoria1 kategoria2 kategoria3’]
* order: Milyen érték szerint szeretnénk listázni
    * Pl.:
        * [woo-gallery order=’name’]
* by: Csökkenő, vagy növekvő sorrendben szeretné-e listázni, két értéke lehet:
    * asc: Növekvő
    * desc: csökkenő
    * Pl.:
        * [woo-gallery order=’name’ by=’asc’]
* limit: Egyszerre maximum hány terméket listázzon ki
    * Pl.:
        * [woo-gallery limit=’10’]
* page: Ha limit értéket ad meg, akkor megadható az, hogy hanyadik „oldal” jelenjen meg.
    * Pl.:
        * [woo-gallery limit=’10’ page=’3’]
            * Jelentése: 21. elemtől 30. elemig tartó elemek listája.
        * [woo-gallery order=’name’ by=’desc’ limit=’10’ page=’3’]
            * Jelentése: 21. elemtől 30. elemig tartó elemek listája, terméknév alapján csökkenő sorrendben sorba rendezve.
