<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config_apex".
 *
 * @property int $id
 * @property int $dpi
 * @property int $edpi
 * @property float $sensitivity
 * @property float $ads_sensitivity_multiplier
 * @property int $hz
 * @property string $acceleration
 * @property string $per_optic_ads_sensitivity
 * @property string $display_mode
 * @property string $resolution
 * @property string $aspect_ratio
 * @property string $brightness
 * @property int $fov
 * @property string $fov_ability_scaling
 * @property string $sprint_view_shake
 * @property string $nvidia_reflex
 * @property string $anti_aliasing
 * @property string $texture_streaming_budget
 * @property string $texture_filtering
 * @property string $ambient_occlusion_quality
 * @property string $sun_shadow_coverage
 * @property string $sun_shadow_detail
 * @property string $spot_shadow_detail
 * @property string $volumetric_lighting
 * @property string $dynamic_spot_shadows
 * @property string $model_detail
 * @property string $effects_detail
 * @property string $impact_marks
 * @property string $ragdolls
 */
class ConfigApex extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config_apex';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dpi', 'edpi', 'sensitivity', 'ads_sensitivity_multiplier', 'hz', 'acceleration', 'per_optic_ads_sensitivity', 'display_mode', 'resolution', 'aspect_ratio', 'brightness', 'fov', 'fov_ability_scaling', 'sprint_view_shake', 'nvidia_reflex', 'anti_aliasing', 'texture_streaming_budget', 'texture_filtering', 'ambient_occlusion_quality', 'sun_shadow_coverage', 'sun_shadow_detail', 'spot_shadow_detail', 'volumetric_lighting', 'dynamic_spot_shadows', 'model_detail', 'effects_detail', 'impact_marks', 'ragdolls'], 'required'],
            [['dpi', 'edpi', 'hz', 'fov'], 'integer'],
            [['sensitivity', 'ads_sensitivity_multiplier'], 'number'],
            [['acceleration', 'per_optic_ads_sensitivity', 'display_mode', 'resolution', 'aspect_ratio', 'brightness', 'fov_ability_scaling', 'sprint_view_shake', 'nvidia_reflex', 'anti_aliasing', 'texture_streaming_budget', 'texture_filtering', 'ambient_occlusion_quality', 'sun_shadow_coverage', 'sun_shadow_detail', 'spot_shadow_detail', 'volumetric_lighting', 'dynamic_spot_shadows', 'model_detail', 'effects_detail', 'impact_marks', 'ragdolls'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dpi' => 'Dpi',
            'edpi' => 'Edpi',
            'sensitivity' => 'Sensitivity',
            'ads_sensitivity_multiplier' => 'Ads Sensitivity Multiplier',
            'hz' => 'Hz',
            'acceleration' => 'Acceleration',
            'per_optic_ads_sensitivity' => 'Per Optic Ads Sensitivity',
            'display_mode' => 'Display Mode',
            'resolution' => 'Resolution',
            'aspect_ratio' => 'Aspect Ratio',
            'brightness' => 'Brightness',
            'fov' => 'Fov',
            'fov_ability_scaling' => 'Fov Ability Scaling',
            'sprint_view_shake' => 'Sprint View Shake',
            'nvidia_reflex' => 'Nvidia Reflex',
            'anti_aliasing' => 'Anti Aliasing',
            'texture_streaming_budget' => 'Texture Streaming Budget',
            'texture_filtering' => 'Texture Filtering',
            'ambient_occlusion_quality' => 'Ambient Occlusion Quality',
            'sun_shadow_coverage' => 'Sun Shadow Coverage',
            'sun_shadow_detail' => 'Sun Shadow Detail',
            'spot_shadow_detail' => 'Spot Shadow Detail',
            'volumetric_lighting' => 'Volumetric Lighting',
            'dynamic_spot_shadows' => 'Dynamic Spot Shadows',
            'model_detail' => 'Model Detail',
            'effects_detail' => 'Effects Detail',
            'impact_marks' => 'Impact Marks',
            'ragdolls' => 'Ragdolls',
        ];
    }
}
