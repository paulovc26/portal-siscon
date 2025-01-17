<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbServicos $model */

$this->title = 'Update Tb Servicos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-servicos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
