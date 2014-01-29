<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>
    $(function() {
      var pull    = $('#pull');
        menu    = $('.responsive-menu');
        menuHeight  = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });

      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
  </script>
</head>

<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>

<?php omega_do_atomic( 'before' ); // omega_before ?>

<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">

  <header id="header">
    <div class="wrap">

      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) : endif; ?>
      <?php omega_do_atomic( 'after_header' ); // omega_after_header ?>
    </div>
  </header>

  <div id="home-slides" class="clearfix">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Slides')) : endif; ?>
  </div>


  <div id="content-top">
    <div class="wrap clearfix">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Top')) : endif; ?>
    </div>
  </div>
<div class="featured-image"><?php the_post_thumbnail( $size, $attr ); ?></div>
  <div id="subheader">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Subheader')) : endif; ?>
  </div>

<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
  <div class="site-inner">

    <?php omega_do_atomic( 'before_main' ); // omega_before_main ?>