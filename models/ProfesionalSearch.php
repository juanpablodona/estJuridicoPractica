<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesional;

/**
 * ProfesionalSearch represents the model behind the search form about `app\models\Profesional`.
 */
class ProfesionalSearch extends Profesional
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofesional'], 'integer'],
            [['nombre', 'apellido', 'matricula'], 'safe'],
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
        $query = Profesional::find();

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
            'idprofesional' => $this->idprofesional,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'matricula', $this->matricula]);

        return $dataProvider;
    }
    
    public static function listarProfesionales(){
        $filas= Profesional::find()->all();
                
        return $filas;
    }
}
