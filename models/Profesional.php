<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesional".
 *
 * @property integer $idprofesional
 * @property string $nombre
 * @property string $apellido
 * @property string $matricula
 *
 * @property Expediente[] $expedientes
 */
class Profesional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'matricula'], 'required'],
            [['nombre', 'apellido', 'matricula'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprofesional' => 'Idprofesional',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'matricula' => 'Matricula',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpedientes()
    {
        return $this->hasMany(Expediente::className(), ['profesional_idprofesional' => 'idprofesional']);
    }

    
    
}
