<?php
include 'header.php';
include "db.php";

function checkIfPosted($field){
  if(isset($_POST[$field])) return true;
  return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_POST['email'];
    $username = $_POST['username'];
    $student_id = $_POST['student_id'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $photo = $_POST['photo'];
    $password = $_POST['password'];
    if(checkIfPosted('music'))
      $music = $_POST['music'];
    else $music = '';
    if(checkIfPosted('acting'))
      $acting = $_POST['acting'];
    else $acting = '';
    if(checkIfPosted('anchoring'))
      $anchoring = $_POST['anchoring'];
    else $anchoring = '';
    if(checkIfPosted('dance'))
      $dance = $_POST['dance'];
    else $dance = '';
    if(checkIfPosted('recitation'))
      $recitation = $_POST['recitation'];
    else $recitation = '';
    
    $interestedFields = $music . ';' . $acting . ';' . $anchoring . ';' . $dance . ';' . $recitation;

    $sql = "INSERT INTO `users` (username, email, password, image, student_id, phone, department, interested_field)
    VALUES ('{$username}', '{$email}', '{$password}', '{$photo}', '{$student_id}', '{$phone}', '{$department}', '{$interestedFields}')";

    if ($conn->query($sql) === TRUE) {
      redirect('registration-success.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
  
include 'footer.php';
  