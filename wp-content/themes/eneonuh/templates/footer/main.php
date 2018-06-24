<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 24-Jun-18
 * Time: 16:56
 */
?>
<footer id="footer">

    <section class="footer-nav">
        <div class="content">

            <nav class="footer-navigation-help" role="navigation">
                <h5 class="menu-title">Pomoc</h5>
				<?php wp_nav_menu( array(
					'theme_location' => 'footer-menu-help',
					'container'      => ''
				) ); ?>
            </nav>

            <nav class="footer-navigation-collections" role="navigation">
                <h5 class="menu-title">Kolekcje</h5>
				<?php wp_nav_menu( array(
					'theme_location' => 'footer-menu-collections',
					'container'      => ''
				) ); ?>
            </nav>

            <nav class="footer-navigation-address" role="navigation">
                <h5 class="menu-title">Adres</h5>
            </nav>

            <nav class="footer-navigation-social-media" role="navigation">
                <h5 class="menu-title">Dołącz do Nas</h5>
            </nav>
        </div>
    </section>

    <section class="footer-copyrights">
        <div class="content">

            <h4>Ene Onuh</h4>
        </div>
    </section>

</footer>
