<?php
namespace app\controllers;

use Yii;
use app\models\Lesson;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class LessonController extends Controller
{
    public function actionIndex()
    {
        $lessons = Lesson::find()->all();
        return $this->render('index', [
            'lessons' => $lessons,
        ]);
    }
}

