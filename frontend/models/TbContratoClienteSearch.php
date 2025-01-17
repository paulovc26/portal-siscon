<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbContratoCliente;

/**
 * TbContratoClienteSearch represents the model behind the search form of `app\models\TbContratoCliente`.
 */
class TbContratoClienteSearch extends TbContratoCliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_cliente', 'id_servico_contratado'], 'integer'],
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
        $query = TbContratoCliente::find();

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
            'id_cliente' => $this->id_cliente,
            'valor_contratado' => $this->valor_contratado,
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim,
            'id_servico_contratado' => $this->id_servico_contratado,
        ]);

        $query->andFilterWhere(['like', 'numero_ctr', $this->numero_ctr])
            ->andFilterWhere(['like', 'detalhes', $this->detalhes]);

        return $dataProvider;
    }
}
