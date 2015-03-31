<?php


function kultra2015_textarea($element) {
  $element['element']['#resizable'] = false ;
  return theme_textarea($element) ;
}




function kultra2015_menu_tree(&$variables) {
 return '<ul class="nav nav-pills nav-stacked">' . $variables['tree'] . '</ul>';
}
function kultra2015_menu_tree__main_menu(&$variables) {
 return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
}
function kultra2015_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
   unset($element['#below']['#theme_wrappers']);
   $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
   $element['#attributes']['class'][] = "dropdown";
   $element['#title'] .= ' <span class="caret"></span>';
   $element['#attributes']['class'][] = 'dropdown';
   $element['#localized_options']['html'] = TRUE;
   $element['#localized_options']['attributes']['data-target'] = '#';
   $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle disabled';
   $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
  }
  $active_trail = array_search('active-trail',$element['#attributes']['class']);
  if($active_trail)
   $element['#attributes']['class'][$active_trail] = 'active';
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}



?>