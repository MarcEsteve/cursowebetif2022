<!DOCTYPE html>
<html>
<body>
<?php
class Fruit {
  public $name="pepito";
  function set_name($name) {
    $this->name = $name;
  }
}
echo 'Este es el Objeto $apple: ';
$apple = new Fruit();
echo $apple->name;//pepito
$apple->set_name("Apple");
echo $apple->name;//Apple
$apple->name="Orange";
echo $apple->name;//Orange
echo '<br> Este es otro Objeto $orange: ';
$orange = new Fruit();
echo $orange->name;//pepito
$orange->set_name("Orange");
$orange->name="naranja";
echo "<br> Mi fruta preferida es la " . $orange->name;
?>
</body>
</html>