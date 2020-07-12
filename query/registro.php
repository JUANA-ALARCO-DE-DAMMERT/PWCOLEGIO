<?php 
 
 $dni = utf8_decode($_POST['dni']); 
 $nombres = utf8_decode($_POST['nombres']); 
 $apellidos = utf8_decode($_POST['apellidos']); 

//  try {
  $conn = new PDO("mysql:host=localhost;dbname=pwcolegio", "root", "");
//   // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO matri_apod (dni, nombres, apellidos)
//   VALUES ('."$dni".', '."$nombres".', '."$apellidos".')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;



 $stmt = $conn->prepare("INSERT INTO matri_apod (dni, nombres, apellidos) VALUES (:dni, :nombres, :apellidos)");

  $stmt->bindParam(':dni', $_POST['dni']);
  $stmt->bindParam(':nombres', $_POST['nombres']);
  $stmt->bindParam(':apellidos', $_POST['apellidos']);

  $stmt->execute();
  ?>