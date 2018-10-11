<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form ActiveForm */
?>

<div class="site-_comment-form">

    <?php \yii\widgets\Pjax::begin(['id'=>'comment-form','clientOptions' => ['method' => 'POST']]); ?>
    <?php $form = ActiveForm::begin([
        'id' => 'comment-form',
        'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
        'options' => ['data-pjax' => true]
    ]); ?>

    <?= $form->field($model, 'content')->textarea(['rows' => '6']) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div><!-- site-_comment-form -->

<?php
$this->registerJs(
    '$("document").ready(function(){
            $("#comment-form").on("pjax:end", function() {
            $.pjax.reload({container:"#comments-list"}); 
            alert("Коммент добовлень!");
        });
    });'
);
?>