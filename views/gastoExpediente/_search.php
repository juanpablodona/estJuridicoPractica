<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GastoExpedienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gasto-expediente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idgastosExpediente') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'costo') ?>

    <?= $form->field($model, 'expediente_idexpediente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
