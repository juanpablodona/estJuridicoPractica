<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GastoExpediente;

/**
 * GastoExpedienteSearch represents the model behind the search form about `app\models\GastoExpediente`.
 */
class GastoExpedienteSearch extends GastoExpediente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idgastosExpediente', 'expediente_idexpediente'], 'integer'],
            [['descripcion'], 'safe'],
            [['costo'], 'number'],
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
        $query = GastoExpediente::find();

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
            'idgastosExpediente' => $this->idgastosExpediente,
            'costo' => $this->costo,
            'expediente_idexpediente' => $this->expediente_idexpediente,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
