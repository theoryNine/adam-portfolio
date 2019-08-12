<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); 
wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true ); 
$site_description = get_bloginfo( 'description', 'display' ); ?>


</head>

<header>
   <div class="header-content container">
      <div class="logo">
         <a href="/">Adam Lamb</a>
         <p><?php echo $site_description; ?></p>
      </div>
      <nav>
         <?php wp_nav_menu(array('theme_location' => 'header-menu'));?>
      </nav>
   </div>
</header>