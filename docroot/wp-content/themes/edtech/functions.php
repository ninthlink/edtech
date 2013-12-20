<?php
if (function_exists('register_sidebar')) {

register_sidebar(array(
  'name' => 'Header',
  'id' => 'header',
  'description' => 'header area',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Subheader',
  'id' => 'subheader',
  'description' => 'subheader area',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Content Top',
  'id' => 'content-top',
  'description' => 'Content top area',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Footer Top',
  'id' => 'footer-top',
  'description' => 'footer top.',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Footer Bottom',
  'id' => 'footer-bottom',
  'description' => 'footer bottom.',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
}
