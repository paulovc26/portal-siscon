<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TbServicos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-servicos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_servico')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
