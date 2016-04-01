<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpedienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expedientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expediente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Expediente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idexpediente',
            'numero',
            'caratula',
            'detalle',
            'estado',
            // 'cliente_idcliente',
            // 'profesional_idprofesional',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
