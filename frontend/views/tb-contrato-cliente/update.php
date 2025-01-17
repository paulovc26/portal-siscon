<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbContratoCliente $model */

$this->title = 'Update Tb Contrato Cliente: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Contrato Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-contrato-cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
