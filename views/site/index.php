<?php

/* @var $this yii\web\View */
use yii\bootstrap\Html;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <p>
        <?php if(!Yii::$app->user->isGuest)
            echo Html::a('Создать вопрос', ['question/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
        ListView::widget([
            'dataProvider' => $questions,
            'options' => [
                'tag' => 'p',
                'class' => 'list-wrapper',
                'id' => 'list-wrapper',
            ],
            'layout' => "{pager}\n{items}\n{summary}",
            'itemView' => function ($model, $key, $index, $widget) {
                return Html::a($model->text, ['question/view' , 'id'=>$model->id]);
            },
        ]);
    ?>
</div>
