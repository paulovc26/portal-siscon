<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbFornecedores $model */

$this->title = 'Update Tb Fornecedores: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Fornecedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-fornecedores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
