<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbFornecedores $model */

$this->title = 'Create Tb Fornecedores';
$this->params['breadcrumbs'][] = ['label' => 'Tb Fornecedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-fornecedores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
