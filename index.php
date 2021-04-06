<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Rectangle
{
    private $width;
    private $height;

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

$rectangle = new Rectangle(20, 70);
echo("chieu rong la " . $rectangle->getWidth() . "<br/>");
echo("chieu dai la " . $rectangle->getHeight() . "<br/>");
echo("chu vi la " . $rectangle->getPerimeter() . "<br/>");
echo("dien tich la " . $rectangle->getArea() . "<br/>");
echo("Your Rectangle" . $rectangle->display());
?>
</body>
</html>
