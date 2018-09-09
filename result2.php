<?php
include("conn/mysqlconn.php");
// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $address = test_input($_POST["address"]);
  $number = test_input($_POST["number"]);
  $email = test_input($_POST["email"]);
  $birthday = test_input($_POST["birthday"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $birthday."<br>".$name."<br>".$surname."<br>".$address."<br>".$number."<br>".$email."<br>".$age."<br>".$gender."<br>";


//insert data
$sql = "INSERT INTO userprofile2 (name,surname,address,number, email, birthday,age, gender) 
VALUES ('$name','$surname','$address','$number', '$email','$birthday', '$age', '$gender')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>