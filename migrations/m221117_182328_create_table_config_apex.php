<?php

use yii\db\Migration;

class m221117_182328_create_table_config_apex extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%config_apex}}',
            [
                'id' => $this->primaryKey(),
                'dpi' => $this->integer()->notNull(),
                'edpi' => $this->integer()->notNull(),
                'sensitivity' => $this->double()->notNull(),
                'ads_sensitivity_multiplier' => $this->double()->notNull(),
                'hz' => $this->integer()->notNull(),
                'acceleration' => $this->string(25)->notNull(),
                'per_optic_ads_sensitivity' => $this->string(25)->notNull(),
                'display_mode' => $this->string(25)->notNull(),
                'resolution' => $this->string(25)->notNull(),
                'aspect_ratio' => $this->string(25)->notNull(),
                'brightness' => $this->string(25)->notNull(),
                'fov' => $this->integer()->notNull(),
                'fov_ability_scaling' => $this->string(25)->notNull(),
                'sprint_view_shake' => $this->string(25)->notNull(),
                'nvidia_reflex' => $this->string(25)->notNull(),
                'anti_aliasing' => $this->string(25)->notNull(),
                'texture_streaming_budget' => $this->string(25)->notNull(),
                'texture_filtering' => $this->string(25)->notNull(),
                'ambient_occlusion_quality' => $this->string(25)->notNull(),
                'sun_shadow_coverage' => $this->string(25)->notNull(),
                'sun_shadow_detail' => $this->string(25)->notNull(),
                'spot_shadow_detail' => $this->string(25)->notNull(),
                'volumetric_lighting' => $this->string(25)->notNull(),
                'dynamic_spot_shadows' => $this->string(25)->notNull(),
                'model_detail' => $this->string(25)->notNull(),
                'effects_detail' => $this->string(25)->notNull(),
                'impact_marks' => $this->string(25)->notNull(),
                'ragdolls' => $this->string(25)->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%config_apex}}');
    }
}
