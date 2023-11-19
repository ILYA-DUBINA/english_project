<?php 
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = addslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
      $nameform = test_input($_POST['name']);
      $phoneform = test_input($_POST['phone']);
      $emailform = test_input($_POST['email']);    
      $dateNow = date("Y-m-d H:i:s");  
      $mysqli = new mysqli("localhost", "root", "", "EnglishTest20231018");
      if($mysqli->connect_errno){
        $error = "Извините, возникла проблема на сайте";
        exit();
      } 
      $date='"'.$mysqli->real_escape_string($dateNow).'"';      
      $name='"'.$mysqli->real_escape_string($nameform).'"';
      $phone='"'.$mysqli->real_escape_string($phoneform).'"';
      $email='"'.$mysqli->real_escape_string($emailform).'"';    
      $query="INSERT INTO applications (timestamp, name, phone, email) VALUES ($date, $name, $phone, $email)";
      $result=$mysqli->query($query);
      if ($result) {
         echo ('Письмо успешно отправлено!');
      }         
      $mysqli->close();
    } else {
      echo ('Ошибка при отправке!'); 
      exit();
    }
  }
?>