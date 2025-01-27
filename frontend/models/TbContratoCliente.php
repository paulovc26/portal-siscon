<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_contrato_cliente".
 *
 * @property int $id
 * @property int $id_cliente
 * @property string|null $numero_ctr
 * @property float|null $valor_contratado
 * @property string $data_inicio
 * @property string $data_fim
 * @property int $id_servico_contratado
 * @property string $detalhes
 */
class TbContratoCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_contrato_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cliente', 'data_inicio', 'data_fim', 'id_servico_contratado', 'detalhes'], 'required'],
            [['id_cliente', 'id_servico_contratado'], 'integer'],
            [['valor_contratado'], 'number'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['detalhes'], 'string'],
            [['numero_ctr'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cliente' => 'Id Cliente',
            'numero_ctr' => 'Numero Ctr',
            'valor_contratado' => 'Valor Contratado',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'id_servico_contratado' => 'Id Servico Contratado',
            'detalhes' => 'Detalhes',
        ];
    }
}
