<!DOCTYPE html>
<html lang="th">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
		<th>Address</th>
        <th>Gender</th>
      </tr>
    </thead>
  

<?php
include("conn/mysqlconn.php");
$sql = "SELECT * FROM `userprofile2`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>

<tr>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["email"];?></td>
		<td><?php echo $row["age"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["gender"];?></td>
      </tr>

<?php	
        //echo "  Name: " . $row["name"]. " " . $row["email"]." " . $row["age"]." " . $row["address"]." " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
 
?>
</table>
</body>

</html>