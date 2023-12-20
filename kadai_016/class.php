<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
<p>
<?php
class Food {
    private $name;
    private $price;

    public function show_price (int $price) {
        $this->price = $price;
        echo $this->price . '<br>';
    }

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function show_height (string $height) {
        $this->height = $height;
        echo $this->height . '<br>';
    }

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$Food = new Food('potato', 250);
$Animal = new Animal('dog', 60, 5000);
print_r($Food);
echo '<br>';
print_r($Animal);
echo '<br>';
echo $Food->show_price(250);
echo $Animal->show_height(60)

?>
</p>
</body>
</html>