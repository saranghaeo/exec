<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfigApex $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-apex-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dpi')->textInput() ?>

    <?= $form->field($model, 'edpi')->textInput() ?>

    <?= $form->field($model, 'sensitivity')->textInput() ?>

    <?= $form->field($model, 'ads_sensitivity_multiplier')->textInput() ?>

    <?= $form->field($model, 'hz')->textInput() ?>

    <?= $form->field($model, 'acceleration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_optic_ads_sensitivity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aspect_ratio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brightness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fov')->textInput() ?>

    <?= $form->field($model, 'fov_ability_scaling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sprint_view_shake')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nvidia_reflex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anti_aliasing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture_streaming_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture_filtering')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ambient_occlusion_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sun_shadow_coverage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sun_shadow_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spot_shadow_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'volumetric_lighting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dynamic_spot_shadows')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'effects_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impact_marks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ragdolls')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
