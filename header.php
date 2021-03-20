<?php
/**
 * This is the header for the EATucker theme.
 *
 * This will display all the <head> section until <div id="main">.
 *
 * @package eatucker-me
 * @since eatucker-me 0.0.1
 */
 /*
 EATucker.me WordPress Theme Copyright (C) 2021. E.A. Tucker
 This program comes with ABSOLUTELY NO WARRANTY;
 This is free software, and you are welcome to redistribute it under certain
 conditions; see https://www.gnu.org/licenses/gpl-3.0.html for mor details.
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale-1" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <header class="site-header">
    <p class="site-title">
      <a href="<?php echo esc_url( home_url( ' /' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </p> <!-- .site-title -->
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
  </header> <!-- .site-header -->
