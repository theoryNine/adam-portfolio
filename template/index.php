<?php
/*
Template Name: Homepage
 */
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();?>

<body <?php body_class();?>>

      <section class="intro container">
         <?php while (have_posts()): the_post();?>
	      <?php the_content();?>
	      <?php endwhile; // end of the loop. ?>
      </section>
</body>

<?php get_footer();?>