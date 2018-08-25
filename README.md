SETUP INSTRUCTIONS
==================

1. Clone this repository
1. See BEDROCK.md to learn more about it
1. Build dependencies with composer
1. Build the theme with gulp
1. `cp .env.example .env`; add database credentials and salts
1. Point your server at the /web directory


Copied from the old README
--------------------------

1. Create a category called "comics", and set at least one post to have that category.
1. Set default post type to `image` and default category to `comics`.
1. Create a menu with items for "About", "Archive" and "Store", and give them the title attributes `sprite-about`, `sprite-archive` and `sprite-store`. Check the box for "Primary Navigation" to activate some hacky styling found in _sprites.css. (See screencap in docs/.)
1. Gulp works just fine if you make sure you're on npm v4.2 or more. In the theme folder (wp-content/themes/sanitary-panels), run npm install && bower install the first time, and then you can gulp or gulp --watch to compile assets and view the site locally.