<?php
namespace sorokinmedia\ar_relations;

/**
 * Class AbstractActiveRecord
 * @package sorokinmedia\ar_relations
 *
 * Расширение базового класса \yii\db\ActiveRecord
 * Позволяет описать метод initClasses и использовать в связях (yii2 relations) автоматическую подстановку нужного класса
 *
 * Необходимо унаследовать все ActiveRecord модели в проекте от дочернего класса этого абстракта
 * В дочернем классе необходимо реализовать метод initClasses
 * Самый простой способ - использовать трейт, где определить в виде свойств все классы, учавствующие в связях
 * и каждому свойству присвоить значение - имя нужного класса
 * Присвоение делать в методе initClasses
 *
 * Примеры в README.md
 */
abstract class AbstractActiveRecord extends \yii\db\ActiveRecord implements RelationInterface
{
    /**
     * @param string $field
     * @param string $class
     * @return mixed
     */
    public function setRelationClass(string $field, string $class)
    {
        return $this->{$field} = $class;
    }

    /**
     * метод необходимо реализовать в дочернем классе
     * @return mixed|void
     */
    public function initClasses()
    {
        //TODO: implement method in child classes
    }

    /**
     * инициализация всех связей
     */
    public function init()
    {
        parent::init();
        $this->initClasses();
    }
}