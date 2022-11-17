<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfigValorant $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-valorant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dpi')->textInput() ?>

    <?= $form->field($model, 'hz')->textInput() ?>

    <?= $form->field($model, 'sensitivity')->textInput() ?>

    <?= $form->field($model, 'zoom_sensitivity')->textInput() ?>

    <?= $form->field($model, 'windows_sensitivity')->textInput() ?>

    <?= $form->field($model, 'raw_input_buffer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aspect_ratio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aspect_ratio_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ui_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anisotropic_filtering')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'experimental_sharpening')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distortion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
