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
  'name' => 'Home Slides',
  'id' => 'home-slides',
  'description' => 'Area for homepage slides',
  'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-outer"><div class="widget-inner">',
  'after_widget' => '</div></div></div>',
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
  'name' => 'Subheader',
  'id' => 'subheader',
  'description' => 'subheader area',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Preface',
  'id' => 'preface',
  'description' => 'Above the content',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Postscript',
  'id' => 'postscript',
  'description' => 'Below the content',
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
