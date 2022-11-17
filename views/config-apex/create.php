<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ConfigApex $model */

$this->title = 'Create Config Apex';
$this->params['breadcrumbs'][] = ['label' => 'Config Apexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-apex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
