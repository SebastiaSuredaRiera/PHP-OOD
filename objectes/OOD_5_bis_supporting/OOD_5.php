<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "Apprentice.php";

$teacher1=new Teacher('Rose','12345678A',1500);//using __construct from Person
$student1=new Student('Pauline','98765432S','ASIX');//using __construct from Person
$Apprentice1=new Apprentice('Basti','91168765L','ASIX','IES Manacor');
//$student1->setStudyField('ASIX');
//$Apprentice1->setFCTBusinessName('IES Manacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $Apprentice1->print();
 ?>
</body>
</html>
