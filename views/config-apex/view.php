<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ConfigApex $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Config Apexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="config-apex-view">

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
            'edpi',
            'sensitivity',
            'ads_sensitivity_multiplier',
            'hz',
            'acceleration',
            'per_optic_ads_sensitivity',
            'display_mode',
            'resolution',
            'aspect_ratio',
            'brightness',
            'fov',
            'fov_ability_scaling',
            'sprint_view_shake',
            'nvidia_reflex',
            'anti_aliasing',
            'texture_streaming_budget',
            'texture_filtering',
            'ambient_occlusion_quality',
            'sun_shadow_coverage',
            'sun_shadow_detail',
            'spot_shadow_detail',
            'volumetric_lighting',
            'dynamic_spot_shadows',
            'model_detail',
            'effects_detail',
            'impact_marks',
            'ragdolls',
        ],
    ]) ?>

</div>
