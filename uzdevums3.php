<?php
//
//abstract class Shape
//{
//    public abstract function getArea():float;
//
//    public function getName(): string
//    {
//        return get_class($this);
//    }
//}
//
//class ShapeCollection {
//    private array $shapes = [];
//
//    public function add(Shape $shape): void
//    {
//        $this->shapes[] = $shape;
//    }
//
//    public function all():array
//    {
//        return $this->shapes;
//    }
//}
//
//class Triangle extends Shape
//{
//    private float $base;
//    private float $height;
//
//    public function __construct($base, $height)
//    {
//        $this->height = $height;
//        $this->base = $base;
//    }
//
//    public function getArea(): float
//    {
//        return $this->base*$this->height*0.5;
//    }
//}
//
//class Square extends Shape
//{
//    private float $length;
//
//    public function __construct($length)
//    {
//        $this->length = $length;
//    }
//
//    public function getArea(): float
//    {
//        return $this->length**2;
//    }
//}
//
//class Circle extends Shape
//{
//    private float $radius;
//
//    public function __construct($radius)
//    {
//        $this->radius = $radius;
//    }
//
//    public function getArea(): float
//    {
//        return $this->radius**2*pi();
//    }
//}
//
//$shapes = new ShapeCollection();
//
//$shapes->add(new Triangle(2,3));
//$shapes->add(new Circle(20));
//$shapes->add(new Square(5));
////$shapes->add('123');
//
//foreach ($shapes->all() as $shape) {
//    echo $shape->getName() . ' Area: ' . $shape->getArea();
//    echo PHP_EOL;
//}`
//abstract class Fruit {
//    public function getName(): string
//    {
//        return get_class($this);
//    }
//
//    public abstract function getColor(): string;
//}
//
//class FruitCollection {
//    private array $fruits = [];
//
//    public function add(Fruit $fruit): void
//    {
//        $this->fruits[] = $fruit;
//    }
//
//    public function all():array
//    {
//        return $this->fruits;
//    }
//}
//
//class Orange extends Fruit {
//    public function getColor(): string
//    {
//        return 'Orange';
//    }
//}
//
//class Strawberry extends Fruit {
//    public function getColor(): string
//    {
//        return 'Red';
//    }
//}
//
//class Apple extends Fruit {
//    public function getColor(): string
//    {
//        return 'Green';
//    }
//}
//
//$fruits = new FruitCollection();
//
//$fruits->add(new Orange());
//$fruits->add(new Apple());
//$fruits->add(new Strawberry());
//
//foreach ($fruits->all() as $fruit) {
//    echo $fruit->getName() . ' is of the color: ' . $fruit->getColor();
//    echo PHP_EOL;
//}

\