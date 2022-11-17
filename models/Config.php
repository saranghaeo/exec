<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property int $dpi
 * @property int $hz
 * @property float $m_sens
 * @property float $zoom_sens
 * @property string $m_acceleration
 * @property string $pointer_speed
 * @property string $brightness
 * @property string $color_mode
 * @property string $aspect_ratio
 * @property string $resolution
 * @property string $scaling_mode
 * @property string $display_mode
 * @property string $global_shadow_quality
 * @property string $texture_detail
 * @property string $effect_detail
 * @property string $shader_detail
 * @property string $multisampling
 * @property int $texture_filtering
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dpi', 'hz', 'm_sens', 'zoom_sens', 'm_acceleration', 'pointer_speed', 'brightness', 'color_mode', 'aspect_ratio', 'resolution', 'scaling_mode', 'display_mode', 'global_shadow_quality', 'texture_detail', 'effect_detail', 'shader_detail', 'multisampling', 'texture_filtering'], 'required'],
            [['dpi', 'hz', 'texture_filtering'], 'integer'],
            [['m_sens', 'zoom_sens'], 'number'],
            [['m_acceleration', 'pointer_speed', 'brightness', 'color_mode', 'aspect_ratio', 'resolution', 'scaling_mode', 'display_mode', 'global_shadow_quality', 'texture_detail', 'effect_detail', 'shader_detail', 'multisampling'], 'string', 'max' => 25],
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
            'hz' => 'Hz',
            'm_sens' => 'M Sens',
            'zoom_sens' => 'Zoom Sens',
            'm_acceleration' => 'M Acceleration',
            'pointer_speed' => 'Pointer Speed',
            'brightness' => 'Brightness',
            'color_mode' => 'Color Mode',
            'aspect_ratio' => 'Aspect Ratio',
            'resolution' => 'Resolution',
            'scaling_mode' => 'Scaling Mode',
            'display_mode' => 'Display Mode',
            'global_shadow_quality' => 'Global Shadow Quality',
            'texture_detail' => 'Texture Detail',
            'effect_detail' => 'Effect Detail',
            'shader_detail' => 'Shader Detail',
            'multisampling' => 'Multisampling',
            'texture_filtering' => 'Texture Filtering',
        ];
    }
}
