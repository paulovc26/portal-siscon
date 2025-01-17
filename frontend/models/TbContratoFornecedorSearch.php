<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbContratoFornecedor;

/**
 * TbContratoFornecedorSearch represents the model behind the search form of `app\models\TbContratoFornecedor`.
 */
class TbContratoFornecedorSearch extends TbContratoFornecedor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_fornecedor'], 'integer'],
            [['numero_ctr', 'data_inicio', 'data_fim', 'detalhes'], 'safe'],
            [['valor_contratado'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbContratoFornecedor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_fornecedor' => $this->id_fornecedor,
            'valor_contratado' => $this->valor_contratado,
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim,
        ]);

        $query->andFilterWhere(['like', 'numero_ctr', $this->numero_ctr])
            ->andFilterWhere(['like', 'detalhes', $this->detalhes]);

        return $dataProvider;
    }
}
