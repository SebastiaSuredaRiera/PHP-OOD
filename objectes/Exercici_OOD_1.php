<HTML>
<head>
<title>Primer exemple amb POO</title>
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

public function anomenar($nom)
{
$this->nom=$nom;
}

public function dades($dni)
{
$this->dni=$dni;
}

public function edat($age)
{
$this->age=$age;
}

public function llinatge_1($surname1)
{
$this->surname1=$surname1;
}

public function llinatge_2($surname2)
{
$this->surname2=$surname2;
}

public function imprimir()
{
echo '</br>';
echo $this->nom;
echo '<br>';
echo $this->dni;
echo '<br>';
echo $this->age;
echo '<br>';
echo $this->surname1;
echo '<br>';
echo $this->surname2;
echo '<br>';
}

}
$alumne1=new Alumne();
$alumne1->anomenar('Imena');
$alumne1->dades('23344556D');
$alumne1->edat('20');
$alumne1->llinatge_1('Sureda');
$alumne1->llinatge_2('Riera');
$alumne1->imprimir();


$alumne2=new Alumne();
$alumne2->anomenar('Ketut');
$alumne2->dades('65544332E');
$alumne2->edat('19');
$alumne2->llinatge_1('Burgera');
$alumne2->llinatge_2('Brunet');
$alumne2->imprimir();
?>
</body>
</HTML>
