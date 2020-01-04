<?php

namespace sorokinmedia\ar_relations\examples;

use sorokinmedia\ar_relations\RelationInterface;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * пример AR класса
 *
 * Class User
 * @package sorokinmedia\ar_relations\examples
 *
 * @property UserProfile $profile
 */
class User extends ActiveRecord implements RelationInterface
{
    use RelationClassTrait;

    /**
     * @return ActiveQuery
     */
    public function getProfile(): ActiveQuery
    {
        return $this->hasOne($this->__userProfileClass, ['user_id' => 'id']);
    }
}
