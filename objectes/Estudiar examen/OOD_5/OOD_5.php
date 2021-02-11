<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "aprendiz.php";

$teacher1=new Teacher('Rose','12345678A',20);//using __construct from Person
//$teacher1->setSalary(10);
$student1=new Student('Pauline','98765432S');//using __construct from Person
$student1->setStudyField('ASIX');
$aprendiz1=new aprendiz('Basti','1234688A');
$aprendiz1->setFCTBusinessName('IES Manacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $aprendiz1->print();
 ?>
</body>
</html>
