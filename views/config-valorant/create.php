<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorant $model */

$this->title = 'Create Config Valorant';
$this->params['breadcrumbs'][] = ['label' => 'Config Valorants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-valorant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
