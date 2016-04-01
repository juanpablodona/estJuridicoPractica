<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Expediente */

$this->title = 'Create Expediente';
$this->params['breadcrumbs'][] = ['label' => 'Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expediente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cliId'=> $cliId,
        'proId'=> $proId,
        'cliN'=> $cliN,
        'proN'=> $proN,
    ]) ?>

</div>
