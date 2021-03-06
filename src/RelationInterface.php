<?php
namespace sorokinmedia\ar_relations;

/**
 * Interface RelationInterface
 * @package sorokinmedia\ar_relations
 */
interface RelationInterface
{
    /**
     * необходимо реализовать этот метод в дочернем классе (трейте)
     * метод должен содержать все названия классов с указанием какой класс использовать
     * указанный в методе класс будет подставлен при любом вызове связи
     * пример: $this->__userClass = User::class; вызовет класс User при вызове связи, где использован $this->__userClass
     * @return mixed
     */
    public function initClasses();

    /**
     * динамическая замена класс в связи
     * @param string $field
     * @param string $class
     * @return mixed
     */
    public function setRelationClass(string $field, string $class);
}