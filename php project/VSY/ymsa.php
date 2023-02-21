<!DOCTYPE HTML> 
<html>
<head>
    

</head>
<link rel="stylesheet" href="YMSA.css">
<body> 

   











    <h1 class="h1" style="text-align:center ;">University of Science & Technology</h1>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER[
    "PHP_SELF"]);?>"> 





    


<form method="post"> 
<from class="fo">
 <div id="Contry">
 <label class="F">Contry</label><br><br>
 <input class="lo" type="text" placeholder="Enter you Contry" name="Contry" ><br><br>

 <label class="F">Adderss</label><br><br>
        <input class="lo" type="text" placeholder="Enter you Address" name="Adderss"><br>

        <br><br>

<label class="F">City</label><br><br>
       <input class="lo" type="text" placeholder="Enter you City" name="City"><br>


        <br><br>


    <label class="F">State<label><br><br>
    <input class="lo" type="text" placeholder="Enter you State" name="State"><br><br>

        
    </div>


 
    



 <br><br>


      





<br>

    <br>

<div class="Describe">
    <label class="F">Describe your location accurately?</label> <be><br>
    <textarea name="Describe" rows="5" cols= "40"></textarea >

</div>

 <br><br>
 
<input type="submit" value="Submit" class="btn"></from>
</form>
    </form>

    <?php



error_reporting (E_ALL ^ E_NOTICE);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }     
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $q1 = test_input($_POST["name"]);
   $q2 = test_input($_POST["cou"]);
   $q3=  test_input($_POST["city"]);
   $q4=  test_input($_POST["stat"]);
 }          
    


$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ust";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


$sql = "INSERT INTO `std`(`heard_abt`, `best_sub`, `read`, `std_name` , `point`) VALUES ('$q1','$q2','$q3','$q4','5')";
if ($conn->query($sql) === TRUE) {
 echo "Record insert it successfully";
} else {
 echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>

</body>
