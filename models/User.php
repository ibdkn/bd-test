<?php

namespace app\models;

use yii\db\ActiveRecord;
class User extends ActiveRecord
{
    // Связываем модель с таблицей базы данных
    public static function tableName() {
        return 'users';
    }

    // Определяем правила валидации
    public function rules() {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
        ];
    }

    // Определяем метки атрибутов
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }

    public function getCompletedLessons()
    {
        return $this->hasMany(CompletedLesson::class, ['user_id' => 'id']);
    }
}
