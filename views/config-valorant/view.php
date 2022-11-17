<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorant $model */

$this->title = 'Valorant - Settings';
\yii\web\YiiAsset::register($this);
?>
<div class="config-valorant-view">

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
            'sensitivity',
            'zoom_sensitivity',
            'windows_sensitivity',
            'edpi',
            'raw_input_buffer',
            'resolution',
            'aspect_ratio',
            'aspect_ratio_method',
            'display_mode',
            'material_quality',
            'texture_quality',
            'detail_quality',
            'ui_quality',
            'anti_aliasing',
            'anisotropic_filtering',
            'experimental_sharpening',
            'distortion',
        ],
    ]) ?>

</div>
