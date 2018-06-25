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
                <ul class="menu-address">
                    <li class="menu-item">ul. Miodowa 35</li>
                    <li class="menu-item">02-456 Warszawa</li>
                    <li class="menu-item menu-item-phone"><a class="underline-on-hover" href="tel:789 098 788">789 098 788</a></li>
                    <li class="menu-item"><a class="underline-on-hover" href="mailto:kontakt@eneonuh.pl">kontakt@eneonuh.pl</a></li>
                </ul>
            </nav>

            <nav class="footer-navigation-social-media" role="navigation">
                <h5 class="menu-title"><a href="/">Dołącz do Nas</a></h5>
                <ul class="menu-social-media">
                    <li class="menu-item menu-item-fb"><a href="/">Facebook</a></li>
                    <li class="menu-item menu-item-pinterest"><a href="/">Pinterest</a></li>
                    <li class="menu-item menu-item-instagram"><a href="/">Instagram</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="footer-copyrights">
        <div class="content">
            <h4 class="company-name">Ene <strong>Onuh</strong></h4>
            <p class="copyrights">
                Wszystkie prawa zastrzeżone. Ene Onuh.
            </p>
        </div>
    </section>

</footer>
