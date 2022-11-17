<?php

use yii\db\Migration;

class m221117_182333_create_table_config_valorant extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%config_valorant}}',
            [
                'id' => $this->primaryKey(),
                'dpi' => $this->integer()->notNull(),
                'hz' => $this->integer()->notNull(),
                'sensitivity' => $this->double()->notNull(),
                'zoom_sensitivity' => $this->double()->notNull(),
                'windows_sensitivity' => $this->integer()->notNull(),
                'edpi' => $this->integer()->notNull(),
                'raw_input_buffer' => $this->string(25)->notNull(),
                'resolution' => $this->string(25)->notNull(),
                'aspect_ratio' => $this->string(25)->notNull(),
                'aspect_ratio_method' => $this->string(25)->notNull(),
                'display_mode' => $this->string(25)->notNull(),
                'material_quality' => $this->string(10)->notNull(),
                'texture_quality' => $this->string(10)->notNull(),
                'detail_quality' => $this->string(10)->notNull(),
                'ui_quality' => $this->string(10)->notNull(),
                'anti_aliasing' => $this->string(10)->notNull(),
                'anisotropic_filtering' => $this->string(10)->notNull(),
                'experimental_sharpening' => $this->string(10)->notNull(),
                'distortion' => $this->string(10)->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%config_valorant}}');
    }
}
