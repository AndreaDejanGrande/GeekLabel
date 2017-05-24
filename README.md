Drupal 7 theme forked from drupal.com/project/bootstrap for Geek Label design.

CSS precompilers: Less.js
CSS methodology: BEM

The page structure consists of 8 regions (page__1, page__2, [...], page__8) each one having a full-screen min-height and linking to the next.
All custom css classes and ids follow the gl__ prefix in order not to mix with Bootstrap's definitions and are written at css/custom/style.less / (~.css); Bootstrap's default CSS has been used for inner columns inside regions/pages, like for tab "Services" and "Clients".

The map is taken from Google Maps' API and is configured in a script located inside the block itself of the region containing the map.

All images (drawings and logos) are taken from the Invision screenshot.
