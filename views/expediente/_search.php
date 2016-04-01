<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExpedienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expediente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idexpediente') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'caratula') ?>

    <?= $form->field($model, 'detalle') ?>

    <?= $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'cliente_idcliente') ?>

    <?php // echo $form->field($model, 'profesional_idprofesional') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
