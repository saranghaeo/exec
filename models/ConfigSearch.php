<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Config;

/**
 * ConfigSearch represents the model behind the search form of `app\models\Config`.
 */
class ConfigSearch extends Config
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dpi', 'hz', 'texture_filtering'], 'integer'],
            [['m_sens', 'zoom_sens'], 'number'],
            [['m_acceleration', 'pointer_speed', 'brightness', 'color_mode', 'aspect_ratio', 'resolution', 'scaling_mode', 'display_mode', 'global_shadow_quality', 'texture_detail', 'effect_detail', 'shader_detail', 'multisampling'], 'safe'],
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
        $query = Config::find();

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
            'm_sens' => $this->m_sens,
            'zoom_sens' => $this->zoom_sens,
            'texture_filtering' => $this->texture_filtering,
        ]);

        $query->andFilterWhere(['like', 'm_acceleration', $this->m_acceleration])
            ->andFilterWhere(['like', 'pointer_speed', $this->pointer_speed])
            ->andFilterWhere(['like', 'brightness', $this->brightness])
            ->andFilterWhere(['like', 'color_mode', $this->color_mode])
            ->andFilterWhere(['like', 'aspect_ratio', $this->aspect_ratio])
            ->andFilterWhere(['like', 'resolution', $this->resolution])
            ->andFilterWhere(['like', 'scaling_mode', $this->scaling_mode])
            ->andFilterWhere(['like', 'display_mode', $this->display_mode])
            ->andFilterWhere(['like', 'global_shadow_quality', $this->global_shadow_quality])
            ->andFilterWhere(['like', 'texture_detail', $this->texture_detail])
            ->andFilterWhere(['like', 'effect_detail', $this->effect_detail])
            ->andFilterWhere(['like', 'shader_detail', $this->shader_detail])
            ->andFilterWhere(['like', 'multisampling', $this->multisampling]);

        return $dataProvider;
    }
}
