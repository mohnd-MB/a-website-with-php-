<?php
$conn = mysqli_connect('localhost', 'root', '', 'ust');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   

/*$name = $_POST["name"];
$id = $_POST["id"];

$sql = "INSERT INTO datatest('id', 'name') 
VALUES ('$id', '$name')";


$result = mysqli_query($conn,$sql);*/

$sql = "DELETE FROM std WHERE std_id=1";
if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
} else {
 echo "Error deleting record: " . $conn->error;
}
$conn->close();

?>