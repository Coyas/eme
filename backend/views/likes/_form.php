<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Likes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="likes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visto')->textInput() ?>

    <?= $form->field($model, 'gosto')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'id_post')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
