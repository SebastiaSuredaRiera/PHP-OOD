<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>


  <?php
  class Alumne
  {
  var $nom;
  var $dni;
  var $surname1;
  var $surname2;
  var $age;


  public function Setnom($nom)
  {
  $this->nom=$nom;
  }

  public function Setdni($dni)
  {
  $this->dni=$dni;
  }

  public function Setage($age)
  {
  $this->age=$age;
  }

  public function Setllinatge_1($surname1)
  {
  $this->surname1=$surname1;
  }

  public function Setllinatge_2($surname2)
  {
  $this->surname2=$surname2;
  }

  public function Getnom($nom)
  {
  return $this->nom;
  }

  public function Getdni($dni)
  {
  return $this->dni;
  }

  public function Getage($age)
  {
  return $this->age;
  }

  public function Getllinatge_1($surname1)
  {
  return $this->surname1;
  }

  public function Getllinatge_2($surname2)
  {
  return $this->surname2;
  }

  function __construct($nom,$dni,$age,$surname1,$surname2) {
  $this->nom=$nom;
  $this->dni=$dni;
  $this->age=$age;
  $this->surname1=$surname1;
  $this->surname2=$surname2;
  }

  public function print()
  {
  echo '</br>';
  echo "name: $this->nom";
  echo '<br>';
  echo "DNI: $this->dni";
  echo '<br>';
  echo "Age: $this->age";
  echo '<br>';
  echo "First surname: $this->surname1";
  echo '<br>';
  echo "Second surname: $this->surname2";
  echo '<br>';
  }
}
$Basti = new Alumne ('Sebastia','41563682F','20','Sureda','Riera');
  echo $Basti->print();


  ?>
  </body>
  </HTML>
