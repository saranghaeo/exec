<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
$this->title = 'CS:GO';

?>
<div class="wrapper">

    <section class="block__1 container">

        <img class="main__pic" src="img/csgo/main_csgo.png" alt="csgo">

        <div class="text__block">
            <h1 class="title">Counter-Strike: Global Offensive</h1>
            <p class="sub_title">Counter-Strike: Global Offensive is a multiplayer first-person shooter developed by
                Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series.</p>
            <button class="btn__upload_config">
                <a class="btn_upload" href="/web/index.php?r=config%2Findex">Upload/View config</a>
            </button>
        </div>

    </section>

    <section class="block__2 container">

        <div class="player_cards">

        </div>
    </section>

</div>
