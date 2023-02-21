<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Certificate informations</title>
</head>

<?php





error_reporting (E_ALL ^ E_NOTICE);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }     
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $q1 = test_input($_POST["std_name"]);
   $q2 = test_input($_POST["cert"]);

 }          
 





$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ust";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


$sql = "INSERT INTO `feedback`(`name`, `namestd`, `number`) VALUES ('$q1', '$q2','123')";
if ($conn->query($sql) === TRUE) {
 echo "Record insert it successfully";
} else {
 echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>
<body><center>
    <form method="post" style="padding: 250px;"> 
        <from class="fo">
         <div id="Contry0">
         <label class="F" style="font-size:xx-large; color:red;">Student Name</label><br><br>
         <input class="lo" type="text" placeholder="Enter your name" name="std_name" ><br><br>
        
         <label class="F" style="font-size:xx-large; color:red;">Certificate</label><br><br>
                <input class="lo" type="text" placeholder="Enter your certificate" name="cert"><br>
        
                <br><br>
        
        <label class="F" style="font-size:xx-large; color:red;">Age</label><br><br>
               <input class="lo" type="text" placeholder="Enter your Age" name="Age"><br>
        
        
        
         <br><br>
         
        <input type="submit" value="Submit" class="btn">
    </form>
</center>
</body>

</html>
