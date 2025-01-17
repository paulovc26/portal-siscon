<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbServicos $model */

$this->title = 'Create Tb Servicos';
$this->params['breadcrumbs'][] = ['label' => 'Tb Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-servicos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
