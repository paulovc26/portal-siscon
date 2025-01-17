<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbContratoClienteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-contrato-cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_cliente') ?>

    <?= $form->field($model, 'numero_ctr') ?>

    <?= $form->field($model, 'valor_contratado') ?>

    <?= $form->field($model, 'data_inicio') ?>

    <?php // echo $form->field($model, 'data_fim') ?>

    <?php // echo $form->field($model, 'id_servico_contratado') ?>

    <?php // echo $form->field($model, 'detalhes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
