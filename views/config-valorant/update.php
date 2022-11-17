<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorant $model */

$this->title = 'Update Config Valorant: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Config Valorants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="config-valorant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
