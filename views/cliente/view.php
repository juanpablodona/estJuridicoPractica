<?php

use app\models\Cliente;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Cliente */

$this->title = $cliente->nombre . ' ' .$cliente->apellido;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $cliente->idcliente], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $cliente->idcliente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea Eliminar este Cliente?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $cliente,
        'attributes' => [
            'nombre',
            'apellido',
            'dni',
            'telefono',
        ],
    ])
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $expedientes,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                'numero',
                'descripcion',
                'profesional',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
