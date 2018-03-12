<?php
  include("connection.php");

  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $phone = $_POST["Phone"];
  $dateIn = $_POST["DateIn"];
  $daysStay = $_POST["DaysStay"];
  $roomType = $_POST["RoomType"];
  $addCharge1 = $_POST["EBed"];
  $addCharge2 = $_POST["AShuttle"];
  $addCharge3 = $_POST["UbudTour"];

  if(is_numeric($name)==true || is_numeric($phone)==false)
  {
    echo "There is something wrong with your input!";
    echo "<br />";
    echo "<button type=\"button\" name=\"insertInvalid\" onclick=\"window.location.href='insert.php'\">";
    echo "Back";
    echo "</button>";
  }
  else
  {
    $insert = mysqli_query($connector,"INSERT INTO Pramana VALUES ('$name','$email','$phone','$dateIn','$daysStay','$roomType','$addCharge1','$addCharge2','$addCharge3')");
    header("Location: Assignment1_Accepted.php");
  }
 ?>
