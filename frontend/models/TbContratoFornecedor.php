<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_contrato_fornecedor".
 *
 * @property int $id
 * @property int $id_fornecedor
 * @property string|null $numero_ctr
 * @property float|null $valor_contratado
 * @property string $data_inicio
 * @property string $data_fim
 * @property string $detalhes
 */
class TbContratoFornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_contrato_fornecedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fornecedor', 'data_inicio', 'data_fim', 'detalhes'], 'required'],
            [['id_fornecedor'], 'integer'],
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
            'id_fornecedor' => 'Id Fornecedor',
            'numero_ctr' => 'Numero Ctr',
            'valor_contratado' => 'Valor Contratado',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'detalhes' => 'Detalhes',
        ];
    }
}
