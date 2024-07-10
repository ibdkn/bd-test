<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%completed_lessons}}`.
 */
class m240708_153345_create_completed_lessons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%completed_lessons}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'lesson_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-completed_lessons-user_id',
            '{{%completed_lessons}}',
            'user_id'
        );

        // creates index for column `lesson_id`
        $this->createIndex(
            'idx-completed_lessons-lesson_id',
            '{{%completed_lessons}}',
            'lesson_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-completed_lessons-user_id',
            '{{%completed_lessons}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        // add foreign key for table `lessons`
        $this->addForeignKey(
            'fk-completed_lessons-lesson_id',
            '{{%completed_lessons}}',
            'lesson_id',
            '{{%lessons}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-completed_lessons-user_id',
            '{{%completed_lessons}}'
        );

        $this->dropForeignKey(
            'fk-completed_lessons-lesson_id',
            '{{%completed_lessons}}'
        );

        $this->dropIndex(
            'idx-completed_lessons-user_id',
            '{{%completed_lessons}}'
        );

        $this->dropIndex(
            'idx-completed_lessons-lesson_id',
            '{{%completed_lessons}}'
        );

        $this->dropTable('{{%completed_lessons}}');
    }
}