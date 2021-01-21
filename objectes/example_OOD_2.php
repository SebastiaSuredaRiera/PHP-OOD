<HTML>
<head>
<title>OOD_2: Fruit class: constructor for initialising properties</title>
</head>
<body>
<?php
class Fruit {
  // Properties
  var $name;
  var $colour;

  // Methods
  function set_name($name) {//snake vs camel case notation
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_colour($colour) {
    $this->colour = $colour;
  }
  function get_colour() {
    return $this->colour;
  }
function __construct($name,$colour) {
$this->name=$name;
$this->colour=$colour;
}
}

$apple = new Fruit('Apple','Red');

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_colour();
?>
</body>
</HTML>
