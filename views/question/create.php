<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = 'Create Question';

?>
<div class="question-create">

    <h1>Содать вопрос</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
