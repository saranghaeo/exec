<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfigSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dpi') ?>

    <?= $form->field($model, 'hz') ?>

    <?= $form->field($model, 'm_sens') ?>

    <?= $form->field($model, 'zoom_sens') ?>

    <?php // echo $form->field($model, 'm_acceleration') ?>

    <?php // echo $form->field($model, 'pointer_speed') ?>

    <?php // echo $form->field($model, 'brightness') ?>

    <?php // echo $form->field($model, 'color_mode') ?>

    <?php // echo $form->field($model, 'aspect_ratio') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'scaling_mode') ?>

    <?php // echo $form->field($model, 'display_mode') ?>

    <?php // echo $form->field($model, 'global_shadow_quality') ?>

    <?php // echo $form->field($model, 'texture_detail') ?>

    <?php // echo $form->field($model, 'effect_detail') ?>

    <?php // echo $form->field($model, 'shader_detail') ?>

    <?php // echo $form->field($model, 'multisampling') ?>

    <?php // echo $form->field($model, 'texture_filtering') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
