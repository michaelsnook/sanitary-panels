SETUP INSTRUCTIONS
==================

DigitalOcean, LAMP, Ubuntu 16.04, WordPress, Bedrock, Sage, Bootstrap 3, SCSS

System Dependencies
-------------------
Always run `apt update` before installing dependencies.

1. PHP 7
1. MySQL
1. NPM 8+


Setup Steps
-----------
1. Clone this repository
1. See BEDROCK.md to learn more about it
1. Build dependencies with `composer install`
1. In the theme folder run `npm install && npm run build`
1. `cp .env.example .env`; add database credentials and salts
1. Point your server at the /web directory
1. Install WordPress by visiting the link

Inside the WP Admin
--------------------------

1. Create a category called "comics", and set at least one post to have that category.
1. Set default post type to `image` and default category to `comics`.
1. Set the Permalink type to `/sample-post/` (aka `/%postname%/).
  1. If the .htaccess file is not writeable, you will need to paste in some content at the bottom of this screen.
1. Create a menu with items for "About", "Archive" and "Store", and give them the title attributes `sprite-about`, `sprite-archive` and `sprite-store`. Check the box for "Primary Navigation" to activate some hacky styling found in _sprites.css. (See screencap in docs/.)
1. Date format is the default `jS F Y`
1. Disable comments site-wide (they're handled by FB comments via Javascript)
1. Enable the plugins!
  1. To make the Autoptimize plugin work, you need to create a directory `web/app/cache` and `web/app/cache/autoptimize` and then `chown www-data:www-data web/app/cache/autoptimize` so the Autoptimize plugin can write minified CSS and JS to the cache folder.
1. Under "Media" in the WP admin, set "Large size images" to have a max width of `780`, and max height of `1560`.
