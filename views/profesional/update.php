<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profesional */

$this->title = 'Update Profesional: ' . $model->idprofesional;
$this->params['breadcrumbs'][] = ['label' => 'Profesionals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprofesional, 'url' => ['view', 'id' => $model->idprofesional]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesional-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
