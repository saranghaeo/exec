<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Config $model */
$this->title = 'CS:GO - Settings';

\yii\web\YiiAsset::register($this);
?>
<div class="block_1_settings">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'dpi',
            'hz',
            'm_sens',
            'zoom_sens',
            'm_acceleration',
            'pointer_speed',
            'brightness',
            'color_mode',
            'aspect_ratio',
            'resolution',
            'scaling_mode',
            'display_mode',
            'global_shadow_quality',
            'texture_detail',
            'effect_detail',
            'shader_detail',
            'multisampling',
            'texture_filtering',
        ],
    ]) ?>

</div>
