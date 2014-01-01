<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Omega
 */

get_header(); ?>

  <main  class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>
    <div id="preface">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Preface')) : endif; ?>
    </div>
    <?php
    omega_do_atomic( 'before_content' ); // omega_before_content

    if ( have_posts() ) :

      /* Start the Loop */
      while ( have_posts() ) : the_post();

        get_template_part( 'partials/content', 'page' );

        comments_template(); // Loads the comments.php template.

      endwhile; // end of the loop.

    endif;

    omega_do_atomic( 'after_content' ); // omega_after_content
    ?>
    <div id="postscript"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Postscript')) : endif; ?></div>
  </main><!-- .content -->

<?php get_footer(); ?>
