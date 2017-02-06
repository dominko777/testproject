<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $model app\models\Question */

?>
<div class="question-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <p><h1><?= $model->text ?></h1></p>


    <div class="answers-index">

        <?php Pjax::begin(['id' => 'answers']) ?>
        <?=
            ListView::widget([
            'dataProvider' => $answers,
            'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
            ],
            'layout' => "{pager}\n{items}\n{summary}",
            'itemView' => function ($model, $key, $index, $widget) {
                return $model->text . '<br>';
            },
            ]);
        ?>
        <?php Pjax::end() ?>
    </div>

    <?php
        if (!Yii::$app->user->isGuest)
          echo $this->render('_answer_form', [
        'answer' => $answer,
    ]) ?>


</div>
