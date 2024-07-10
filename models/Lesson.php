<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Lesson extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lessons}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'video_link', 'created_at'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['video_link'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'video_link' => 'Video URL',
            'created_at' => 'Created At',
        ];
    }

    public function getFormattedCreatedAt()
    {
        return Yii::$app->formatter->asDate($this->created_at, 'php:d.m.Y');
    }
}

