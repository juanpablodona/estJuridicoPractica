<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GastoExpediente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gasto-expediente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idgastosExpediente')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo')->textInput() ?>

    <?= $form->field($model, 'expediente_idexpediente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
