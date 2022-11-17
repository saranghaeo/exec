<?php

use app\models\ConfigValorant;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorantSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
?>
<div class="config-valorant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Config Valorant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dpi',
            'hz',
            'sensitivity',
            'zoom_sensitivity',
            //'windows_sensitivity',
            //'edpi',
            //'raw_input_buffer',
            //'resolution',
            //'aspect_ratio',
            //'aspect_ratio_method',
            //'display_mode',
            //'material_quality',
            //'texture_quality',
            //'detail_quality',
            //'ui_quality',
            //'anti_aliasing',
            //'anisotropic_filtering',
            //'experimental_sharpening',
            //'distortion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ConfigValorant $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
