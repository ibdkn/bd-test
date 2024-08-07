<?php

use yii\db\Migration;

class m240708_155345_insert_lessons_data extends Migration
{
    public function safeUp()
    {
        $this->batchInsert('{{%lessons}}', ['id', 'title', 'description', 'video_link', 'created_at'], [
            [1, 'Angular 14.0', 'Description for lesson Angular 14.0', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [2, 'Java Script in Action', 'Description for Java Script in Action', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [3, 'Java Script vs TypeScript', 'Description for lesson Java Script vs TypeScript', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [4, 'HTML & CSS & JS', 'Description for lesson HTML & CSS & JS', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [5, 'CSS Animations', 'Description for lesson CSS Animations', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [6, 'Angular in 10 minutes', 'Description for lesson Angular in 10 minutes', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [7, 'Material UI for Angular', 'Description for lesson Material UI for Angular', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [8, 'RxJS', 'Description for lesson RxJS', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [9, 'Type Script for beginners', 'Description for lesson Type Script for beginners', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
            [10, 'MySql', 'Description for lesson MySql', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', $this->getCurrentTimestamp()],
        ]);
    }

    public function safeDown()
    {
        $this->delete('{{%lessons}}', ['id' => [1,2,3,4,5,6,7,8,9,10]]);
    }

    private function getCurrentTimestamp()
    {
        return date('Y-m-d H:i:s');
    }
}