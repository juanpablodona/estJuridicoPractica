<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $iduser
 * @property string $user
 * @property string $pass
 * @property string $tipo
 * @property integer $profesional_idprofesional
 *
 * @property Profesional $profesionalIdprofesional
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'pass', 'tipo', 'profesional_idprofesional'], 'required'],
            [['profesional_idprofesional'], 'integer'],
            [['user', 'pass', 'tipo'], 'string', 'max' => 45],
            [['profesional_idprofesional'], 'exist', 'skipOnError' => true, 'targetClass' => Profesional::className(), 'targetAttribute' => ['profesional_idprofesional' => 'idprofesional']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'user' => 'User',
            'pass' => 'Pass',
            'tipo' => 'Tipo',
            'profesional_idprofesional' => 'Profesional Idprofesional',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesionalIdprofesional()
    {
        return $this->hasOne(Profesional::className(), ['idprofesional' => 'profesional_idprofesional']);
    }
}
