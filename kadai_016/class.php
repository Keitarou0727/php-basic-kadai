
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>16章課題</title>
</head>
<body>
<p>

<?php
class Food {
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function show_price() {
        return $this->price;
    }
}

class Animal {
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function show_height() {
        return $this->height;
    }
}

$apple = new Food('リンゴ', 10);
$cat = new Animal('マロン', 20, 30);

echo $apple->show_price();
echo '<br>';
echo $cat->show_height();
?>
</p>

</body>
</html>