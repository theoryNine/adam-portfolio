<?php
/*
Template Name: Page Template
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

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container">
      <?php
/*
Surrounding Classes for the site
These are different every theme and help with structure and layout
These could be SPANs or DIVs and with entirely different classes.
*/
?>

<?php wp_login_form(); ?>

<div id="primary" class="site-content">
   <div id="content" role="main">
      <?php
      /*
      Start the Loop
      */
      ?>

      <?php while ( have_posts() ) : the_post(); ?>


      <?php
      /*
      This is the start of the page and also the insertion of the post classes.
      Post classes are very handy to style your forums.
      */
      ?>

   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


   <?php
   /*
   This is the content wrapped in a div
    
   and class to better style the content
   */
   ?>

   <div class="entry-content">
      <?php the_content(); ?>
   </div>

   <!-- .entry-content -->


   <?php
   /*
   End of Page
   */
   ?>

   </article>

   <!-- #post -->
   <?php endwhile; // end of the loop. ?>

   </div>

   <!-- #content -->

   </div>

   <!-- #primary -->


   <?php
   /*
   This is code to display the sidebar and the footer.
    
   Remove the sidebar code to get full-width forums.
    
   This would also need CSS to make it actually full width.
   */
   ?>

</div>
</body>

<?php get_footer(); ?>