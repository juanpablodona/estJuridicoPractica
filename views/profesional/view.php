<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profesional */

$this->title = $model->idprofesional;
$this->params['breadcrumbs'][] = ['label' => 'Profesionals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesional-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idprofesional], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idprofesional], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idprofesional',
            'nombre',
            'apellido',
            'matricula',
        ],
    ]) ?>

</div>
