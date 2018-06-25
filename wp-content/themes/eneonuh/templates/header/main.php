<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 12-Jun-18
 * Time: 11:06
 */
?>
<header class="header">

    <div class="content">
        <h1 class="logo desktop-only">
            <a href="/">
                <img src="/images/prod/header/logo.png" alt="Ene Onuh Fashion Logo">
                <span>ene <strong>onuh</strong></span>
            </a>
        </h1>
        <button class="hamburger hamburger--emphatic">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
	    <?php get_template_part( 'templates/header/_main-navigation' ); ?>
	    <?php get_template_part( 'templates/header/_side-navigation' ); ?>
    </div>


</header>
