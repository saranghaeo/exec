<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

?>
<div class="wrapper">

    <section class="block__1 container">

        <img class="main__pic" src="img/valorant/main_valorant.png" alt="valorant">

        <div class="text__block">
            <h1 class="title">Valorant</h1>
            <p class="sub_title">VALORANT is a free-to-play first-person hero shooter developed and published by Riot Games.
                It’s 5v5, competitive, and character-based.</p>
            <button class="btn__upload_config">
                <a class="btn_upload" href="/web/index.php?r=config-valorant%2Findex">Upload/View config</a>
            </button>
        </div>

    </section>

    <section class="block_2 container">

        <div class="player_cards">


        </div>
    </section>

</div>
