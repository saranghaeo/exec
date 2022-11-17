<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConfigApex;

/**
 * ConfigApexSearch represents the model behind the search form of `app\models\ConfigApex`.
 */
class ConfigApexSearch extends ConfigApex
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dpi', 'edpi', 'hz', 'fov'], 'integer'],
            [['sensitivity', 'ads_sensitivity_multiplier'], 'number'],
            [['acceleration', 'per_optic_ads_sensitivity', 'display_mode', 'resolution', 'aspect_ratio', 'brightness', 'fov_ability_scaling', 'sprint_view_shake', 'nvidia_reflex', 'anti_aliasing', 'texture_streaming_budget', 'texture_filtering', 'ambient_occlusion_quality', 'sun_shadow_coverage', 'sun_shadow_detail', 'spot_shadow_detail', 'volumetric_lighting', 'dynamic_spot_shadows', 'model_detail', 'effects_detail', 'impact_marks', 'ragdolls'], 'safe'],
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
        $query = ConfigApex::find();

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
            'edpi' => $this->edpi,
            'sensitivity' => $this->sensitivity,
            'ads_sensitivity_multiplier' => $this->ads_sensitivity_multiplier,
            'hz' => $this->hz,
            'fov' => $this->fov,
        ]);

        $query->andFilterWhere(['like', 'acceleration', $this->acceleration])
            ->andFilterWhere(['like', 'per_optic_ads_sensitivity', $this->per_optic_ads_sensitivity])
            ->andFilterWhere(['like', 'display_mode', $this->display_mode])
            ->andFilterWhere(['like', 'resolution', $this->resolution])
            ->andFilterWhere(['like', 'aspect_ratio', $this->aspect_ratio])
            ->andFilterWhere(['like', 'brightness', $this->brightness])
            ->andFilterWhere(['like', 'fov_ability_scaling', $this->fov_ability_scaling])
            ->andFilterWhere(['like', 'sprint_view_shake', $this->sprint_view_shake])
            ->andFilterWhere(['like', 'nvidia_reflex', $this->nvidia_reflex])
            ->andFilterWhere(['like', 'anti_aliasing', $this->anti_aliasing])
            ->andFilterWhere(['like', 'texture_streaming_budget', $this->texture_streaming_budget])
            ->andFilterWhere(['like', 'texture_filtering', $this->texture_filtering])
            ->andFilterWhere(['like', 'ambient_occlusion_quality', $this->ambient_occlusion_quality])
            ->andFilterWhere(['like', 'sun_shadow_coverage', $this->sun_shadow_coverage])
            ->andFilterWhere(['like', 'sun_shadow_detail', $this->sun_shadow_detail])
            ->andFilterWhere(['like', 'spot_shadow_detail', $this->spot_shadow_detail])
            ->andFilterWhere(['like', 'volumetric_lighting', $this->volumetric_lighting])
            ->andFilterWhere(['like', 'dynamic_spot_shadows', $this->dynamic_spot_shadows])
            ->andFilterWhere(['like', 'model_detail', $this->model_detail])
            ->andFilterWhere(['like', 'effects_detail', $this->effects_detail])
            ->andFilterWhere(['like', 'impact_marks', $this->impact_marks])
            ->andFilterWhere(['like', 'ragdolls', $this->ragdolls]);

        return $dataProvider;
    }
}
