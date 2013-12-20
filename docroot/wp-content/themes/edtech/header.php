<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>

<?php omega_do_atomic( 'before' ); // omega_before ?>

<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">

  <header id="header">
    <div class="wrap">
      <?php omega_do_atomic( 'before_header' ); // omega_before_header ?>
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) :
      endif; ?>
      <?php omega_do_atomic( 'after_header' ); // omega_after_header ?>
    </div>
  </header>
  <div id="subheader">
    <div class="wrap">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Subheader')) :
      endif; ?>
    </div>
  </div>

  <div id="content-top">
    <div class="wrap">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Top')) :
      endif; ?>
    </div>
  </div>


  <div class="site-inner">

    <?php omega_do_atomic( 'before_main' ); // omega_before_main ?>