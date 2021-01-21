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
  $alumne1=new Alumne();
  $alumne1->Setnom('Imena');
  $alumne1->Setdni('23344556D');
  $alumne1->Setage('20');
  $alumne1->Setllinatge_1('Sureda');
  $alumne1->Setllinatge_2('Riera');
  $alumne1->print();


  $alumne2=new Alumne();
  $alumne2->Setnom('Ketut');
  $alumne2->Setdni('65544332E');
  $alumne2->Setage('19');
  $alumne2->Setllinatge_1('Burgera');
  $alumne2->Setllinatge_2('Brunet');
  $alumne2->print();
  ?>
  </body>
  </HTML>
