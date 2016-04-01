<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GastoExpediente */

$this->title = 'Create Gasto Expediente';
$this->params['breadcrumbs'][] = ['label' => 'Gasto Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gasto-expediente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
