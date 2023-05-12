<?php
// include 'DBConnect.php';
require 'DBConnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database <br>";

while ($row = mysqli_fetch_assoc($result)) {
    // echo var_dump($row);
    echo $row['Sr.No.'] . ". Hello " . $row['Name'] . " Welcome to " . $row['Dest'];
     echo "<br>";
}
?>