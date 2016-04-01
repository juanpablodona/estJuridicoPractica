<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Expediente;

/**
 * ExpedienteSearch represents the model behind the search form about `app\models\Expediente`.
 */
class ExpedienteSearch extends Expediente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idexpediente', 'numero', 'estado', 'cliente_idcliente', 'profesional_idprofesional'], 'integer'],
            [['caratula', 'detalle'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Expediente::find();

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
            'idexpediente' => $this->idexpediente,
            'numero' => $this->numero,
            'estado' => $this->estado,
            'cliente_idcliente' => $this->cliente_idcliente,
            'profesional_idprofesional' => $this->profesional_idprofesional,
        ]);

        $query->andFilterWhere(['like', 'caratula', $this->caratula])
            ->andFilterWhere(['like', 'detalle', $this->detalle]);

        return $dataProvider;
    }
    
    
}
