<?php

use app\models\ConfigApex;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ConfigApexSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Config Apexes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-apex-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Config Apex', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dpi',
            'edpi',
            'sensitivity',
            'ads_sensitivity_multiplier',
            //'hz',
            //'acceleration',
            //'per_optic_ads_sensitivity',
            //'display_mode',
            //'resolution',
            //'aspect_ratio',
            //'brightness',
            //'fov',
            //'fov_ability_scaling',
            //'sprint_view_shake',
            //'nvidia_reflex',
            //'anti_aliasing',
            //'texture_streaming_budget',
            //'texture_filtering',
            //'ambient_occlusion_quality',
            //'sun_shadow_coverage',
            //'sun_shadow_detail',
            //'spot_shadow_detail',
            //'volumetric_lighting',
            //'dynamic_spot_shadows',
            //'model_detail',
            //'effects_detail',
            //'impact_marks',
            //'ragdolls',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ConfigApex $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
