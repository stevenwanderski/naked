<?php

/**
 * Implements hook_preprocess().
 */
function naked_preprocess_page(&$variables) {
  $variables['main_menu'] = render(menu_tree_output(menu_tree_all_data('main-menu')));
}

/**
 * Implements hook_css_alter().
 * Removes all Drupal system stylesheets.
 */
function naked_css_alter(&$css){
  foreach($css as $path => $stylesheet){
    if(strpos($path, 'modules/') === 0) unset($css[$path]);
  }
}

?>