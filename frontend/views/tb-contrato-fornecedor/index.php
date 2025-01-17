<?php

use app\models\TbContratoFornecedor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TbContratoFornecedorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Contrato Fornecedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-contrato-fornecedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Contrato Fornecedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_fornecedor',
            'numero_ctr',
            'valor_contratado',
            'data_inicio',
            //'data_fim',
            //'detalhes:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbContratoFornecedor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
