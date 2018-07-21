# yii2-ar-relations

***
Sorokin.Media repository
***

Расширение базового класса `\yii\db\ActiveRecord`

Позволяет описать метод `initClasses` и использовать в связях (yii2 relations) автоматическую подстановку нужного класса
   
Необходимо унаследовать все ActiveRecord модели в проекте от дочернего класса этого абстракта
 
В дочернем классе необходимо реализовать метод `initClasses`

Самый простой способ - использовать трейт, где определить в виде свойств все классы, учавствующие в связях и каждому свойству присвоить значение - имя нужного класса
 
Присвоение делать в методе `initClasses`
 
Пример файла трейта:

```$php
trait RelationClassTrait
{
    public $__userClass;
    
    public function initClasses()
    {
        $this->__userClass = User::class;
    }
}
```

Этот файл необходимо использовать в дочернем классе этого абстракта. Пример:
```$php
class ActiveRecord extends AbstractActiveRecord
{
    use RelationClassTrait;
}
```