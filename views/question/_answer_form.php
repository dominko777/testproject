<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\widgets\ListView;

$this->registerJs(
    '$("document").ready(function(){ 
        $("#new_answer").on("pjax:end", function() {
            $.pjax.reload({container:"#answers"});  //Reload GridView
        });
    });'
);
?>

<div class="answer-form">

    <?php yii\widgets\Pjax::begin(['id' => 'new_answer']) ?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>

    <?= $form->field($answer, 'text')->textInput(['maxlength' => 200]) ?>


    <div class="form-group">
        <?= Html::submitButton('Ответить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php yii\widgets\Pjax::end() ?>
</div>