<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbClientes $model */

$this->title = 'Update Tb Clientes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-clientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
