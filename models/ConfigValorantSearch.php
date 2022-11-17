<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConfigValorant;

/**
 * ConfigValorantSearch represents the model behind the search form of `app\models\ConfigValorant`.
 */
class ConfigValorantSearch extends ConfigValorant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dpi', 'hz', 'windows_sensitivity', 'edpi'], 'integer'],
            [['sensitivity', 'zoom_sensitivity'], 'number'],
            [['raw_input_buffer', 'resolution', 'aspect_ratio', 'aspect_ratio_method', 'display_mode', 'material_quality', 'texture_quality', 'detail_quality', 'ui_quality', 'anti_aliasing', 'anisotropic_filtering', 'experimental_sharpening', 'distortion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ConfigValorant::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dpi' => $this->dpi,
            'hz' => $this->hz,
            'sensitivity' => $this->sensitivity,
            'zoom_sensitivity' => $this->zoom_sensitivity,
            'windows_sensitivity' => $this->windows_sensitivity,
            'edpi' => $this->edpi,
        ]);

        $query->andFilterWhere(['like', 'raw_input_buffer', $this->raw_input_buffer])
            ->andFilterWhere(['like', 'resolution', $this->resolution])
            ->andFilterWhere(['like', 'aspect_ratio', $this->aspect_ratio])
            ->andFilterWhere(['like', 'aspect_ratio_method', $this->aspect_ratio_method])
            ->andFilterWhere(['like', 'display_mode', $this->display_mode])
            ->andFilterWhere(['like', 'material_quality', $this->material_quality])
            ->andFilterWhere(['like', 'texture_quality', $this->texture_quality])
            ->andFilterWhere(['like', 'detail_quality', $this->detail_quality])
            ->andFilterWhere(['like', 'ui_quality', $this->ui_quality])
            ->andFilterWhere(['like', 'anti_aliasing', $this->anti_aliasing])
            ->andFilterWhere(['like', 'anisotropic_filtering', $this->anisotropic_filtering])
            ->andFilterWhere(['like', 'experimental_sharpening', $this->experimental_sharpening])
            ->andFilterWhere(['like', 'distortion', $this->distortion]);

        return $dataProvider;
    }
}
