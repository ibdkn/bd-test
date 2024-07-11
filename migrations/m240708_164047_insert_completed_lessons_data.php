<?php

use yii\db\Migration;

class m240708_164047_insert_completed_lessons_data extends Migration
{
    public function safeUp()
    {
        $this->batchInsert('{{%completed_lessons}}', ['user_id', 'lesson_id', 'completed_at'], [
            [1, 1, $this->getCurrentTimestamp()],
            [1, 2, $this->getCurrentTimestamp()],
            [2, 1, $this->getCurrentTimestamp()],
            [2, 3, $this->getCurrentTimestamp()],
            [3, 2, $this->getCurrentTimestamp()],
            [3, 4, $this->getCurrentTimestamp()],
            [4, 1, $this->getCurrentTimestamp()],
            [4, 5, $this->getCurrentTimestamp()],
            [5, 3, $this->getCurrentTimestamp()],
            [5, 4, $this->getCurrentTimestamp()],
        ]);
    }

    public function safeDown()
    {
        $this->delete('{{%completed_lessons}}', ['user_id' => [1, 2, 3, 4, 5]]);
    }

    private function getCurrentTimestamp()
    {
        return date('Y-m-d H:i:s');
    }
}