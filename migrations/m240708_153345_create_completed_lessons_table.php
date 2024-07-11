<?php

use yii\db\Migration;

class m240708_153345_create_completed_lessons_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%completed_lessons}}', [
            // первичный ключ
            'id' => $this->primaryKey(),
            // Внешний ключ, ссылающийся на таблицу users
            'user_id' => $this->integer()->notNull(),
            // Внешний ключ, ссылающийся на таблицу lessons.
            'lesson_id' => $this->integer()->notNull(),
            // Дата и время создания записи, устанавливаются по умолчанию в момент добавления
            'created_at' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        // создание индексов: для ускорения поиска по колонкам user_id и lesson_id

        $this->createIndex(
            'idx-completed_lessons-user_id', // уникальное имя индекса
            '{{%completed_lessons}}', // имя таблицы, в которой создается индекс
            'user_id' // имя столбца, на котором создается индекс
        );

        $this->createIndex(
            'idx-completed_lessons-lesson_id',
            '{{%completed_lessons}}',
            'lesson_id'
        );


        // добавление внешних ключей: устанавливаются для обеспечения целостности данных между таблицами

        $this->addForeignKey(
            'fk-completed_lessons-user_id', // имя внешнего ключа для user_id
            '{{%completed_lessons}}', // таблица, в которой создается внешний ключ
            'user_id', // колонка, на которую накладывается внешний ключ
            '{{%users}}', // таблица, на которую ссылается внешний ключ
            'id', // колонка таблицы users, на которую ссылается внешний ключ
            'CASCADE' // правило удаления и обновления, которое означает, что при удалении или обновлении
                             // записи в таблице users связанные записи в таблице completed_lessons также будут
                             // удалены или обновлены.
        );

        $this->addForeignKey(
            'fk-completed_lessons-lesson_id',
            '{{%completed_lessons}}',
            'lesson_id',
            '{{%lessons}}',
            'id',
            'CASCADE'
        );
    }

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