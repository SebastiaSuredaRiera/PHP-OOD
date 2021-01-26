<HTML>
<head>
<title>OOD_2: Fruit class: constructor for initialising properties</title>
</head>
<body>
<?php
class Currency_converter {
  // Properties
  var $Euros;
  var $Exchange;
  var $Pounds;

  // Methods
  function set_Euros($Euros) {//snake vs camel case notation
    $this->Euros = $Euros;
  }
  function get_Euros() {
    return $this->Euros;
  }
  function set_Exchange($Exchange) {
    $this->Exchange = $Exchange;
  }
  function get_Exchange() {
    return $this->$Exchange;
  }
  function set_Pounds($Pounds) {
    $this->Pounds = $Pounds;
  }
  function get_Pounds() {
    return $this->Pounds;
  }

  function __construct($Euros,$Exchange) {
  $this->Euros=$Euros;
  $this->Exchange=$Exchange;
  }

public function converter_pounds_to_Euros () {
 $this->Pounds=$this->Euros/$this->Exchange;
 return $this->Pounds;
}

  public function print()
{
echo '</br>';
echo "euros: $this->Euros";
echo '<br>';
echo "canvi: $this->Exchange";
echo '<br>';
echo "Pounds: $this->Pounds";
}

}
$Exchange=0;

$Converter = new Currency_converter('10','0.89');

if ($Converter->Exchange>0)
$Converter -> converter_pounds_to_Euros ();
else {
  echo "The exchange rate has to be grater than 0 </br>";
}

echo $Converter->print();
?>
</body>
</HTML>
