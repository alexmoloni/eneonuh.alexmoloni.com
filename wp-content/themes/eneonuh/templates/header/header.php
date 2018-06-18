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
                <img id="logo" src="images/prod/header/logo.svg" alt="Ene Onuh Fashion Logo">
                <h1>ene <strong>onuh</strong></h1>
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
