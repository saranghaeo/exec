<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config_valorant".
 *
 * @property int $id
 * @property int $dpi
 * @property int $hz
 * @property float $sensitivity
 * @property int $windows_sensitivity
 * @property int $eDPI
 * @property string $raw_input_buffer
 * @property float $zoom_sensitivity
 * @property int $resolution
 * @property int $aspect_ratio
 * @property int $aspect_ratio_method
 * @property int $display_mode
 * @property int $multithreaded_rendering
 * @property int $material_quality
 * @property int $texture_quality
 * @property int $detail_quality
 * @property int $ui_quality
 * @property int $anisotropic_filtering
 * @property int $improve_clarity
 * @property int $experimental_sharpening
 * @property string $distortion
 */
class ConfigValorant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config_valorant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dpi', 'hz', 'sensitivity', 'windows_sensitivity', 'eDPI', 'raw_input_buffer', 'zoom_sensitivity', 'resolution', 'aspect_ratio', 'aspect_ratio_method', 'display_mode', 'multithreaded_rendering', 'material_quality', 'texture_quality', 'detail_quality', 'ui_quality', 'anisotropic_filtering', 'improve_clarity', 'experimental_sharpening', 'distortion'], 'required'],
            [['dpi', 'hz', 'windows_sensitivity', 'eDPI', 'resolution', 'aspect_ratio', 'aspect_ratio_method', 'display_mode', 'multithreaded_rendering', 'material_quality', 'texture_quality', 'detail_quality', 'ui_quality', 'anisotropic_filtering', 'improve_clarity', 'experimental_sharpening'], 'integer'],
            [['sensitivity', 'zoom_sensitivity'], 'number'],
            [['raw_input_buffer'], 'string', 'max' => 25],
            [['distortion'], 'string', 'max' => 3],
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
            'sensitivity' => 'Sensitivity',
            'windows_sensitivity' => 'Windows Sensitivity',
            'eDPI' => 'E Dpi',
            'raw_input_buffer' => 'Raw Input Buffer',
            'zoom_sensitivity' => 'Zoom Sensitivity',
            'resolution' => 'Resolution',
            'aspect_ratio' => 'Aspect Ratio',
            'aspect_ratio_method' => 'Aspect Ratio Method',
            'display_mode' => 'Display Mode',
            'multithreaded_rendering' => 'Multithreaded Rendering',
            'material_quality' => 'Material Quality',
            'texture_quality' => 'Texture Quality',
            'detail_quality' => 'Detail Quality',
            'ui_quality' => 'Ui Quality',
            'anisotropic_filtering' => 'Anisotropic Filtering',
            'improve_clarity' => 'Improve Clarity',
            'experimental_sharpening' => 'Experimental Sharpening',
            'distortion' => 'Distortion',
        ];
    }
}
