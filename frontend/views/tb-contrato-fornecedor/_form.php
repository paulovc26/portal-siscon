<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbContratoFornecedor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-contrato-fornecedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_fornecedor')->textInput() ?>

    <?= $form->field($model, 'numero_ctr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor_contratado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_inicio')->textInput() ?>

    <?= $form->field($model, 'data_fim')->textInput() ?>

    <?= $form->field($model, 'detalhes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
