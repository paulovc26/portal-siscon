<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_fornecedores".
 *
 * @property int $id
 * @property string|null $fornecedor
 * @property string|null $cpf_cnpj
 */
class TbFornecedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_fornecedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fornecedor'], 'string', 'max' => 70],
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
            'fornecedor' => 'Fornecedor',
            'cpf_cnpj' => 'Cpf Cnpj',
        ];
    }
}
