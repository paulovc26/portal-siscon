<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbContratoFornecedor $model */

$this->title = 'Create Tb Contrato Fornecedor';
$this->params['breadcrumbs'][] = ['label' => 'Tb Contrato Fornecedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-contrato-fornecedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
