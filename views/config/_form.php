<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Config $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dpi')->textInput() ?>

    <?= $form->field($model, 'hz')->textInput() ?>

    <?= $form->field($model, 'm_sens')->textInput() ?>

    <?= $form->field($model, 'zoom_sens')->textInput() ?>

    <?= $form->field($model, 'm_acceleration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pointer_speed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brightness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aspect_ratio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scaling_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'global_shadow_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'effect_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shader_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'multisampling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture_filtering')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
