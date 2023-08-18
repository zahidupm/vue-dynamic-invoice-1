<?php

class Shape
{
    public function area()
    {
        // Placeholder method
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return M_PI * $this->radius ** 2;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle area: " . $circle->area() . PHP_EOL;       // Output: Circle area: 78.539816339745
echo "Rectangle area: " . $rectangle->area() . PHP_EOL; // Output: Rectangle area: 24


