<?php

use yii\db\Migration;

class m240624_175236_insert_users_data extends Migration
{
    public function safeUp()
    {
        // метод batchInsert вставляет несколько строк данных в таблицу
        // принимает 3 парамера: название таблицы, массив имен столбцом и массив массивов значений, которые будут добавлены
        $this->batchInsert('{{%users}}', ['id', 'first_name', 'last_name'], [
            [1, 'Anna', 'Pratt'],
            [2, 'George', 'Donovan'],
            [3, 'Alice', 'Cooper'],
            [4, 'Bob', 'Dilan'],
            [5, 'Carol', 'Burnett'],
        ]);
    }
    public function safeDown()
    {
        // удаление строк из таблицы по id
        // ['id' => [1, 2, 3, 4, 5]] - условие, которое указывает, какие записи должны быть удалены.
        $this->delete('{{%users}}', ['id' => [1, 2, 3, 4, 5]]);
    }
}
