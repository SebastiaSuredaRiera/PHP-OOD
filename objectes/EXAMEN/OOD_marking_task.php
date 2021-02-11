<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "Accommodation.php";//similar to include
require "RuralAcc.php";
require "BusinessAcc.php";


$RuralAcc1= new RuralAcc(10,MENJADOR[0],true,RuralAcc::INST_AIRE_LLUIRE[2]);
$BusinessAcc1= new BusinessAcc (1,MENJADOR[1]);


try {
  $BusinessAcc1-> checkIn();
  $BusinessAcc1-> checkIn();
}
catch (Exception $e) {
    echo "Exception message is: " . $e->getMessage() . "<br>";
}



 ?>
</body>
</html>
