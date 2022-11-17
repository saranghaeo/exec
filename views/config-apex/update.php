<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfigApex $model */

$this->title = 'Update Config Apex: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Config Apexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="config-apex-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
