# yii2-ar-relations

***
Sorokin.Media repository
***

[![Total Downloads](https://img.shields.io/packagist/dt/sorokinmedia/yii2-ar-relations.svg)](https://packagist.org/packages/sorokinmedia/yii2-ar-relations)

Расширение базового класса `\yii\db\ActiveRecord`

Позволяет описать метод `initClasses` и использовать в связях (yii2 relations) автоматическую подстановку нужного класса

Необходимо в проекте использовать трейт, где определить в виде атрибуторв все классы, учавствующие в связях и каждому атрибуту присвоить значение - имя нужного класса
 
Присвоение классов переменным делать в методе `initClasses`
 
Пример файла трейта:

```$php
trait RelationClassTrait
{
    public $__userClass;
    
    public function initClasses()
    {
        $this->__userClass = User::class;
    }
    
    /**
     * инициализация связей
     */
    public function init()
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
```
   
Необходимо во всех ActiveRecord моделях использовать данный трейт, а также имплементацию интерфейса `RelationInterface`
