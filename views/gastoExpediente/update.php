<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GastoExpediente */

$this->title = 'Update Gasto Expediente: ' . $model->idgastosExpediente;
$this->params['breadcrumbs'][] = ['label' => 'Gasto Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgastosExpediente, 'url' => ['view', 'id' => $model->idgastosExpediente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gasto-expediente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
