<?php
namespace sorokinmedia\ar_relations\examples;

use sorokinmedia\ar_relations\RelationInterface;
use yii\db\ActiveRecord;

class UserProfile extends ActiveRecord implements RelationInterface
{
    use RelationClassTrait;
}