<?php
namespace sorokinmedia\ar_relations\examples;

/**
 * пример трейта
 *
 * Trait RelationClassTrait
 * @package sorokinmedia\ar_relations\examples
 */
trait RelationClassTrait
{
    public $__userClass;
    public $__userProfileClass;

    /**
     * инициализация классов
     */
    public function initClasses(): void
    {
        $this->__userClass = User::class;
        $this->__userProfileClass = UserProfile::class;
    }

    /**
     * инициализация связей
     */
    public function init(): void
    {
        parent::init();
        $this->initClasses();
    }

    /**
     * метод для динамической подстановки нужного класса в связь
     * @param string $field
     * @param string $class
     * @return mixed
     */
    public function setRelationClass(string $field, string $class)
    {
        return $this->{$field} = $class;
    }
}
