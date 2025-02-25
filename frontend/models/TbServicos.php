<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_servicos".
 *
 * @property int $id
 * @property string|null $nome_servico
 */
class TbServicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_servicos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_servico'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_servico' => 'Nome Servico',
        ];
    }
}
