<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbFornecedores $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-fornecedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fornecedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf_cnpj')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
