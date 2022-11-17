<?php

use app\models\Config;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ConfigSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Config', ['create'], ['class' => 'btn btn-success']) ?>
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
            'm_sens',
            'zoom_sens',
            //'m_acceleration',
            //'pointer_speed',
            //'brightness',
            //'color_mode',
            //'aspect_ratio',
            //'resolution',
            //'scaling_mode',
            //'display_mode',
            //'global_shadow_quality',
            //'texture_detail',
            //'effect_detail',
            //'shader_detail',
            //'multisampling',
            //'texture_filtering',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Config $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
