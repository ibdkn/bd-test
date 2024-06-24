<?php

use yii\helpers\Html;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('<i class="fa fa-plus"></i> Create User', ['create'], ['class' => 'btn btn-success mb-3']) ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td class="index-column">
                        <?= $index + 1 ?>
                    </td>
                    <td>
                        <?= Html::encode($user->first_name . ' ' . $user->last_name) ?>
                    </td>
                    <td class="actions-column">
                        <?= Html::a('<i class="fa fa-eye"></i>', ['view', 'id' => $user->id], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= Html::a('<i class="fas fa-pencil-alt"></i>', ['update', 'id' => $user->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $user->id], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>