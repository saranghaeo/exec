<?php

use yii\db\Migration;

class m221117_182319_create_table_config extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%config}}',
            [
                'id' => $this->primaryKey(),
                'dpi' => $this->integer()->notNull(),
                'hz' => $this->integer()->notNull(),
                'm_sens' => $this->double()->notNull(),
                'zoom_sens' => $this->double()->notNull(),
                'm_acceleration' => $this->string(25)->notNull(),
                'pointer_speed' => $this->string(25)->notNull(),
                'brightness' => $this->string(25)->notNull(),
                'color_mode' => $this->string(25)->notNull(),
                'aspect_ratio' => $this->string(25)->notNull(),
                'resolution' => $this->string(25)->notNull(),
                'scaling_mode' => $this->string(25)->notNull(),
                'display_mode' => $this->string(25)->notNull(),
                'global_shadow_quality' => $this->string(25)->notNull(),
                'texture_detail' => $this->string(25)->notNull(),
                'effect_detail' => $this->string(25)->notNull(),
                'shader_detail' => $this->string(25)->notNull(),
                'multisampling' => $this->string(25)->notNull(),
                'texture_filtering' => $this->string(25)->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%config}}');
    }
}
