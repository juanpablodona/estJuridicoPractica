<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Expediente */

$this->title = 'Update Expediente: ' . $model->idexpediente;
$this->params['breadcrumbs'][] = ['label' => 'Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idexpediente, 'url' => ['view', 'id' => $model->idexpediente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="expediente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
