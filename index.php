<!doctype Html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restavracija</title>
</head>
<body>


<?php
class Restaurant {
    public $name;
    public $city;
    public $tables;
    public function __construct($name, $city, $tables) {
        $this->name = $name;
        $this->city = $city;
        $this->tables= $tables;
}
    public function Location() {
        echo "Welcome to ".$this->city." and our restaurant ".$this->name.".";
    }
    public function Tables() {
        echo "Tonight we have ".$this->tables." available tables.";
    } 
}

$restaurant = new Restaurant("Konoba", "Kamenjak",12);


echo $restaurant->Location()."<br>";
echo $restaurant->Tables()."<br>";



?>





</body>
</html>