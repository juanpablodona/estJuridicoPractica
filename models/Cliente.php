<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $idcliente
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property string $telefono
 *
 * @property Expediente[] $expedientes
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'dni', 'telefono'], 'required'],
            [['nombre', 'apellido', 'dni', 'telefono'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcliente' => 'Idcliente',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'dni' => 'Dni',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpedientes()
    {
        return $this->hasMany(Expediente::className(), ['cliente_idcliente' => 'idcliente']);
    }

    
    
}
