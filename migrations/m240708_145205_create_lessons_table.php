<?php

use yii\db\Migration;

class m240708_145205_create_lessons_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('lessons', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'video_link' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('lessons');
    }
}
