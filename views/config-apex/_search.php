<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConfigApexSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="config-apex-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dpi') ?>

    <?= $form->field($model, 'edpi') ?>

    <?= $form->field($model, 'sensitivity') ?>

    <?= $form->field($model, 'ads_sensitivity_multiplier') ?>

    <?php // echo $form->field($model, 'hz') ?>

    <?php // echo $form->field($model, 'acceleration') ?>

    <?php // echo $form->field($model, 'per_optic_ads_sensitivity') ?>

    <?php // echo $form->field($model, 'display_mode') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'aspect_ratio') ?>

    <?php // echo $form->field($model, 'brightness') ?>

    <?php // echo $form->field($model, 'fov') ?>

    <?php // echo $form->field($model, 'fov_ability_scaling') ?>

    <?php // echo $form->field($model, 'sprint_view_shake') ?>

    <?php // echo $form->field($model, 'nvidia_reflex') ?>

    <?php // echo $form->field($model, 'anti_aliasing') ?>

    <?php // echo $form->field($model, 'texture_streaming_budget') ?>

    <?php // echo $form->field($model, 'texture_filtering') ?>

    <?php // echo $form->field($model, 'ambient_occlusion_quality') ?>

    <?php // echo $form->field($model, 'sun_shadow_coverage') ?>

    <?php // echo $form->field($model, 'sun_shadow_detail') ?>

    <?php // echo $form->field($model, 'spot_shadow_detail') ?>

    <?php // echo $form->field($model, 'volumetric_lighting') ?>

    <?php // echo $form->field($model, 'dynamic_spot_shadows') ?>

    <?php // echo $form->field($model, 'model_detail') ?>

    <?php // echo $form->field($model, 'effects_detail') ?>

    <?php // echo $form->field($model, 'impact_marks') ?>

    <?php // echo $form->field($model, 'ragdolls') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
