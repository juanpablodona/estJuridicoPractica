<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GastoExpedienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gasto Expedientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gasto-expediente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gasto Expediente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idgastosExpediente',
            'descripcion',
            'costo',
            'expediente_idexpediente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
