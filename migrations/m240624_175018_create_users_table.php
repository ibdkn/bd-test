<?php

use yii\db\Migration;

// объявляем новый класс миграции, который наследует базовый класс yii\db\Migration
// m240624_175018 - временная пометка, позволяет Yii2 упорядочивать миграции по времени их создания.
class m240624_175018_create_users_table extends Migration
{
    // метод safeUp() вызывается при применении миграции
    public function safeUp()
    {
        // createTable принимает 2 параметра:
        // название таблицы и ассоциативный массив, используемый для определения структуры таблицы
        $this->createTable('{{%users}}', [

            // Создает поле id с типом данных PRIMARY KEY, которое автоматически инкрементируется
            'id' => $this->primaryKey(),

            // Создает поле first_name с типом данных VARCHAR и устанавливает, что это поле не может быть пустым (NOT NULL)
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
        ]);
    }

    // метод вызывается при отмене миграции
    public function safeDown()
    {
        // dropTable удаляет таблицу
        $this->dropTable('{{%users}}');
    }
}
