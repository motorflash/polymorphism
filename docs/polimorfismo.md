#POLIMORFISMO:

Introducción:
============

- Herencia.
- Clases abstractas e interfaces.
- Polimorfismo.

En este minicurso veremos estos conceptos, qué significan y qué nos aportan.
Veremos también un caso práctico que puedes descargar de [github](https://github.com/motorflash/polymorphism)

Terminología:
=============

- Instancias: Objetos diferentes de la misma clase

```php
class ClassA {}

$instance1 = new ClassA();
$instance2 = new ClassA();
```

- Clase instanciable: Clase de la que se pueden crear instancias

- Type hinting/Determinación de tipos: Permite especificar el tipo de datos que se espera de un argumento en la declaración de una función

```php
class ClassA {
  protected $foo;
  public funcion setFoo(string $foo)
  {
    return $this->foo;
  } 
}

$instance = new ClassA();
$instance->setFoo('foo'); # Correcto
$instance->setFoo(1); # Error
```

- DRY: Don't repeat yourself


Herencia simple:
===============

- La herencia simple implica que una clase instanciable sea extendida
- Hereda funcionalidad (propiedades y métodos)

```php
class ClassA {
  protected $foo;
  public funcion getFoo()
  {
    return $this->foo;
  } 
}

class ClassB extends ClassA {}

$instanceA = new ClassA();
$instanceB = new ClassB();

$fooA = $instanceA->getFoo();
$fooB = $instanceB->getFoo();
```


Clases abstractas:
==================

- Las clases abstractas son clases que sólo se usan para extender otras clases
- No son instanciables


```php
abstract class ClassA {
  protected $foo;
  public funcion getFoo()
  {
    return $this->foo;
  } 
}

class ClassB extends ClassA {}

$instanceA = new ClassA(); # Incorrecto
$instanceB = new ClassB(); # Correcto

$fooB = $instanceB->getFoo();
```


Interfaces:
===========

- Las interfaces se usan para definir métodos sin funcionalidad
- Las clases que implemetan una interfaz tienen que implementar todos los métodos de la interfaz.


```php
interface AInterface {
  public funcion getFoo();
}

class ClassA implements AInterface
{
  protected $foo;
  public funcion getFoo()
  {
    return $this->foo;
  }
}

class ClassB
{
  protected $foo;
  public funcion getFoo(AInterface $class)
  {
    return $class->getFoo();
  }
}


$instanceA = new ClassA();
$instanceB = new ClassB();

$fooA = $instanceA->getFoo();
$fooB = $instanceB->getFoo($instanceA);
```


Caso práctico:
=============

En este [caso práctico](https://github.com/motorflash/polymorphism) tenemos clases de animales al azar con métodos que muestran un texto según la acción (hacer ruido, comer, dormir, ...).
Veremos como modificando las clases podemos mejorar el código para que sea más fácil de entender y de modificar.


###Sin herencia:

En el ejemplo sin herencia tenemos una clase Cat y una Lion. Algunos métodos hacen lo mismo, así que estamos duplicando código:

[Modelos](https://github.com/motorflash/polymorphism/tree/master/src/AppBundle/Model/Basic)
[Tests de modelos](https://github.com/motorflash/polymorphism/tree/master/tests/AppBundle/Model/Basic)

El servicio tiene un método para "dar vida" a cualquier animal. El problema es que viendo sólo el servicio no podemos saber de qué clase es "animal":

[Servicio](https://github.com/motorflash/polymorphism/blob/master/src/AppBundle/Service/Basic/AnimalService.php)
[Tests de servicio](https://github.com/motorflash/polymorphism/blob/master/tests/AppBundle/Service/Basic/AnimalServiceTest.php)

###Herencia simple:

En este ejemplo vamos a utilizar la herencia para no duplicar código. Esta vez tenemos una clase Animal con métodos "por defecto" para ser extendida por las dos anteriores.
De esta forma, Cat y Lion sólo implementan los métodos que son diferentes:

[Modelos](https://github.com/motorflash/polymorphism/tree/master/src/AppBundle/Model/Inheritance)
[Tests de modelos](https://github.com/motorflash/polymorphism/tree/master/tests/AppBundle/Model/Inheritance)

Ahora desde el servicio podemos usar "Type hinting/Determinación de tipos" para decirle al método "live" que queremos como argumento una clase de tipo Animal:

[Servicio](https://github.com/motorflash/polymorphism/blob/master/src/AppBundle/Service/Inheritance/AnimalService.php)
[Tests de servicio](https://github.com/motorflash/polymorphism/blob/master/tests/AppBundle/Service/Inheritance/AnimalServiceTest.php)

Sólo tenemos un pequeño problema. No queremos que Animal sea instanciable, porque sólo queremos crear animales de un tipo concreto. Animal es un concepto abstracto en este caso.
En el siguiente ejemplo, modificaremos la clase Animal para que sea abstracta y así no sea instanciable.

###Herencia con clases abstractas:

En este caso vamos a añadir una clase nueva Dog. Tanto Dog como Cat tienen un método "domesticar" (tame), pero Lion no porque es un animal salvaje.
Para que podamos seguir usando Animal como argumento necesitamos definir el método "tame" en Lion también, pero que no haga nada. Como podemos tener muchos animales salvajes, para no tener que definir el método en todos, vamos a añadir el método "tame" a la clase Animal y que no haga nada. Luego, si un animal es "domable" implementará el método "tame".
La clase Animal ahora es abstracta, y el método makeNoise también es abstracto lo que implica que las clases que extiendan de Animal tendrán que implementar ese método.

[Modelos](https://github.com/motorflash/polymorphism/tree/master/src/AppBundle/Model/AbstractInheritance)
[Servicio](https://github.com/motorflash/polymorphism/blob/master/src/AppBundle/Service/AbstractInheritance/AnimalService.php)
[Tests de servicio](https://github.com/motorflash/polymorphism/blob/master/tests/AppBundle/Service/AbstractInheritance/AnimalServiceTest.php)

Podríamos tener otra clase Pet que implementara "tame" y heredar e las dos clases Animal y Pet en el caso de que sea "domesticable"??

[Pet](https://github.com/motorflash/polymorphism/blob/master/src/AppBundle/Model/AbstractInheritance/Pet.php)

No podemos usar herencia múltiple en PHP. Por otra parte hay motivos de sobra para no usar herencia múltiple en general. En pocas palabras, le herencia múltiple provoca ambigüedad. Más info: [Deadly Diamond of Death](https://en.wikipedia.org/wiki/Multiple_inheritance#The_diamond_problem)

###Interfaces:

Viendo el caso anterior podríamos decir que Lion no debería poder llamar a "tame" ya que no es domesticable, es decir, en lugar de no hacer nada, al llamar al método "tame" de un animal salvaje debería lanzar un error. Como hemos visto antes, no podemos usar herencia múltiple, pero sí podemos implementar varias interfaces. De este modo podemos decir que un objeto que hereda de Animal implementa también otros métodos (como "tame"). Esto lo hacemos creando una interfaz Pet que implementan Dog y Cat:

[Modelos](https://github.com/motorflash/polymorphism/tree/master/src/AppBundle/Model/InterfaceImplementation)
[Servicio](https://github.com/motorflash/polymorphism/blob/master/src/AppBundle/Service/InterfaceImplementation/AnimalService.php)
[Tests de servicio](https://github.com/motorflash/polymorphism/blob/master/tests/AppBundle/Service/InterfaceImplementation/AnimalServiceTest.php)

Y por último? Qué es el polimorfismo. Pues es la calidad de clase de tomar varias formas.
Por ejemplo, tenemos la clase Animal. ¿Qué es Animal? Por si solo no es nada porque no podemos instanciar una clase Animal.
Puede ser Lion, Car, Dog, etc. En definitiva, cualquier clase que extienda de Animal. Por tanto Animal puede tener varias "formas". De ahí polimorfismo.



