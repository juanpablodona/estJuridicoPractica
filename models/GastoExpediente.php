<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gastosExpediente".
 *
 * @property integer $idgastosExpediente
 * @property string $descripcion
 * @property double $costo
 * @property integer $expediente_idexpediente
 *
 * @property Expediente $expedienteIdexpediente
 */
class GastoExpediente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gastosExpediente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idgastosExpediente', 'descripcion', 'costo', 'expediente_idexpediente'], 'required'],
            [['idgastosExpediente', 'expediente_idexpediente'], 'integer'],
            [['costo'], 'number'],
            [['descripcion'], 'string', 'max' => 45],
            [['expediente_idexpediente'], 'exist', 'skipOnError' => true, 'targetClass' => Expediente::className(), 'targetAttribute' => ['expediente_idexpediente' => 'idexpediente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgastosExpediente' => 'Idgastos Expediente',
            'descripcion' => 'Descripcion',
            'costo' => 'Costo',
            'expediente_idexpediente' => 'Expediente Idexpediente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpedienteIdexpediente()
    {
        return $this->hasOne(Expediente::className(), ['idexpediente' => 'expediente_idexpediente']);
    }

    /**
     * @inheritdoc
     * @return ExpedienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ExpedienteQuery(get_called_class());
    }
}
