<?php

use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" value="<?= Html::encode($model->title) ?>" disabled>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" disabled><?= Html::encode($model->description) ?></textarea>
    </div>
    <div class="form-group">
        <label for="video_link">Video URL</label>
        <input type="text" class="form-control" id="video_link" value="<?= Html::encode($model->video_link) ?>"
               disabled>
    </div>
    <div class="form-group">
        <label for="created_at">Created At</label>
        <input type="text" class="form-control" id="created_at" value="<?= Html::encode($model->getFormattedCreatedAt()) ?>"
               disabled>
    </div>
</div>

<p>
    <?= Html::a('Update', ['lesson/update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>
</p>

</div>
