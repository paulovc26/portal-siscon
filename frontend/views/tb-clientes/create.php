<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbClientes $model */

$this->title = 'Create Tb Clientes';
$this->params['breadcrumbs'][] = ['label' => 'Tb Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-clientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
