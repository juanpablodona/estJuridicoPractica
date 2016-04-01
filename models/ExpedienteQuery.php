<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Expediente]].
 *
 * @see Expediente
 */
class ExpedienteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Expediente[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Expediente|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
