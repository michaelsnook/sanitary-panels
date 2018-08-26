SETUP INSTRUCTIONS
==================

DigitalOcean, LAMP, Ubuntu 16.04, WordPress, Bedrock, Sage, Bootstrap 3, SCSS

System Dependencies
-------------------
Always run `apt update` before installing dependencies.

1. PHP 5.6 or 7
1. MySQL
1. NPM to build assets
1. Install Gulp, Bower


Setup Steps
-----------
1. Clone this repository
1. See BEDROCK.md to learn more about it
1. Build dependencies with `composer install`
1. In the theme folder run `npm install && bower install` the first time, and then you can `gulp` or `gulp --watch` to compile assets
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
