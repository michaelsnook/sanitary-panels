### Installing this Wordpress / Sanitary Panels Site Locally

1. Set up a MySQL database called `wp_os_sp` and grant all privileges to user `wp_os_sp`
1. `git clone git@github.com:michaelsnook/sanitary-panels.git`.
1. Run your MySQL server and point Apache at the `/sanitary-panels` folder you just cloned.
1. Install Wordpress, create users, add sample posts.
1. Set default post type to `image` and default category to `comics`.
1. Create a menu with items for "About", "Archive" and "Store", and give them the title attributes `sprite-about`, `sprite-archive` and `sprite-store`. Check the box for "Primary Navigation" to activates some hacky styling found in `_sprites.css`. (See screencap in `docs/`.)
1. Right now I'm not sure if all the Gulp/Grunt/Bower things work so I'm just using `sass --watch wp-content/themes/sanitary-panels/assets/styles/main.scss:wp-content/themes/sanitary-panels/dist/styles/main.css`

### Deploying with OpenShift (RedHat Cloud)

This project started as the RedHat OpenShift WordPress Developer QuickStart Guide.
You can see the original how-to in `docs/OPENSHIFT.md`. To deploy this repo as
an OpenShift site, create an account, create an app, `git commit`, make sure your
RedHat Cloud repository has a git remote, and `git push RHC_REMOTE_NAME`.

Beware the ephemeral filesystem -- it's not as bad as Heroku, but it will wipe out
your media/uploads folder, so be sure you connect to s3.
