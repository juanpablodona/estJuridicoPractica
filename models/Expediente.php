<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expediente".
 *
 * @property integer $idexpediente
 * @property integer $numero
 * @property string $caratula
 * @property string $detalle
 * @property integer $estado
 * @property integer $cliente_idcliente
 * @property integer $profesional_idprofesional
 *
 * @property Cliente $clienteIdcliente
 * @property Profesional $profesionalIdprofesional
 * @property GastosExpediente[] $gastosExpedientes
 */
class Expediente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expediente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'caratula', 'detalle', 'estado', 'cliente_idcliente', 'profesional_idprofesional'], 'required'],
            [['numero', 'estado', 'cliente_idcliente', 'profesional_idprofesional'], 'integer'],
            [['caratula', 'detalle'], 'string', 'max' => 45],
            [['cliente_idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_idcliente' => 'idcliente']],
            [['profesional_idprofesional'], 'exist', 'skipOnError' => true, 'targetClass' => Profesional::className(), 'targetAttribute' => ['profesional_idprofesional' => 'idprofesional']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idexpediente' => 'Idexpediente',
            'numero' => 'Numero',
            'caratula' => 'Caratula',
            'detalle' => 'Detalle',
            'estado' => 'Estado',
            'cliente_idcliente' => 'Cliente Idcliente',
            'profesional_idprofesional' => 'Profesional Idprofesional',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteIdcliente()
    {
        return $this->hasOne(Cliente::className(), ['idcliente' => 'cliente_idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesionalIdprofesional()
    {
        return $this->hasOne(Profesional::className(), ['idprofesional' => 'profesional_idprofesional']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGastosExpedientes()
    {
        return $this->hasMany(GastosExpediente::className(), ['expediente_idexpediente' => 'idexpediente']);
    }

    /**
     * @inheritdoc
     * @return ExpedienteQuery the active query used by this AR class.
     */
   
    
    
}
