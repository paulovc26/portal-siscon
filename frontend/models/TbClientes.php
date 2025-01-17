<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_clientes".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $cpf_cnpj
 */
class TbClientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 75],
            [['cpf_cnpj'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf_cnpj' => 'Cpf Cnpj',
        ];
    }
}
