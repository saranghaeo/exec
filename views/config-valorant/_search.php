<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorantSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-valorant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dpi') ?>

    <?= $form->field($model, 'hz') ?>

    <?= $form->field($model, 'sensitivity') ?>

    <?= $form->field($model, 'zoom_sensitivity') ?>

    <?php // echo $form->field($model, 'windows_sensitivity') ?>

    <?php // echo $form->field($model, 'edpi') ?>

    <?php // echo $form->field($model, 'raw_input_buffer') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'aspect_ratio') ?>

    <?php // echo $form->field($model, 'aspect_ratio_method') ?>

    <?php // echo $form->field($model, 'display_mode') ?>

    <?php // echo $form->field($model, 'material_quality') ?>

    <?php // echo $form->field($model, 'texture_quality') ?>

    <?php // echo $form->field($model, 'detail_quality') ?>

    <?php // echo $form->field($model, 'ui_quality') ?>

    <?php // echo $form->field($model, 'anti_aliasing') ?>

    <?php // echo $form->field($model, 'anisotropic_filtering') ?>

    <?php // echo $form->field($model, 'experimental_sharpening') ?>

    <?php // echo $form->field($model, 'distortion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
