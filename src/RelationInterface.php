<?php
namespace ma3obblu\ar_relations;

/**
 * Interface RelationInterface
 * @package ma3obblu\ar_relations
 */
interface RelationInterface
{
    /**
     * необходимо реализовать этот метод в дочернем классе(трейте)
     * метод должен содержать все названия классов с указанием какой класс использовать
     * указанный в методе класс будет подставлен при любом вызове связи
     * пример: $this->__userClass = User::class; вызовет класс User при вызове связи, где использован $this->__userClass
     * @return mixed
     */
    public function initClasses();

    /**
     * переопределение существующей связи
     * @param string $field
     * @param string $class
     * @return mixed
     */
    public function setRelationClass(string $field, string $class);
}