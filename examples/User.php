<?php
namespace sorokinmedia\ar_relations\examples;

use sorokinmedia\ar_relations\RelationInterface;
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
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne($this->__userProfileClass, ['user_id' => 'id']);
    }
}