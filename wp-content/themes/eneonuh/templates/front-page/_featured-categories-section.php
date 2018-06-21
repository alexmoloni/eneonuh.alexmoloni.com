<?php
/**
 * Created by PhpStorm.
 * User: Aleksander
 * Date: 18-Jun-18
 * Time: 16:37
 */

require_once( 'featured-categories-boxes.php' )
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
    <div class="content content__mobile">
<div class="featured-categories-slider">

</div>
    </div>
</section>
