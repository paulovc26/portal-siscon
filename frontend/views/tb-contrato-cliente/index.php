<?php

use app\models\TbContratoCliente;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TbContratoClienteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Contrato Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-contrato-cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Contrato Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_cliente',
            'numero_ctr',
            'valor_contratado',
            'data_inicio',
            //'data_fim',
            //'id_servico_contratado',
            //'detalhes:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbContratoCliente $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
