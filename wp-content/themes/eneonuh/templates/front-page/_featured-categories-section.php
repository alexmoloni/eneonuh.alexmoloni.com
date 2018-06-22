<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 18-Jun-18
 * Time: 16:37
 */

require_once( '_featured-categories-boxes.php' )
?>

<section id="featured-categories">
    <div class="content -desktop">
        <div class="col-left col-5">
			<?= $boxes[1] ?>
        </div>
        <div class="col-right col-7">
            <div class="row row-top">
                <div class="col-left">
					<?= $boxes[2] ?>
                </div>
                <div class="col-right">
					<?= $boxes[3] ?>
                </div>
            </div>
            <div class="row row-bottom">
                <div class="col-left">
					<?= $boxes[4] ?>
                </div>
                <div class="col-right">
					<?= $boxes[5] ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content -mobile">
        <div class="featured-categories-slider">
            <div class="slide">
                <?= $boxes[1] ?>
            </div>
            <div class="slide">
                <?= $boxes[2] ?>
            </div>
            <div class="slide">
                <?= $boxes[3] ?>
            </div>
            <div class="slide">
                <?= $boxes[4] ?>
            </div>
            <div class="slide">
                <?= $boxes[5] ?>
            </div>
        </div>
    </div>
</section>
