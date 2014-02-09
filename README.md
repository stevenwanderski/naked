# Naked
Naked is a base Drupal 7 theme that attempts to remove the cruel markup that Drupal imposes on unsuspecting souls. This theme is intended for site builders that want *none* of Drupal's standard styles and markup when using a fresh install.

This theme does a few things out of the box:

1. Removes all system CSS stylesheets. This lessens your battle with Drupal when creating your custom styles.
2. Includes templates that remove extraneous markup for such core elements as nodes, regions, blocks, and pages.
3. Includes a `$main_menu` variable that contains the markup for main menu. This can be placed in the `page.tpl.php` template.
4. Includes the famous Meyer CSS reset stylesheet ([http://meyerweb.com/eric/tools/css/reset/](http://meyerweb.com/eric/tools/css/reset/))
5. Includes a base JS file that includes the proper setup for a standard jQuery `.ready()` call.

## Installation
1. Drop the entire folder `naked` in the themes directory found here: `sites/all/themes`. You should have the following directory: `sites/all/themes/naked`.
2. Navigate to the admin theme settings page: `/admin/appearance` and select "Enable and set default" for the "Naked" theme.