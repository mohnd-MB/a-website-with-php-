<?php 


error_reporting (E_ALL ^ E_NOTICE);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }     
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $q1 = test_input($_POST["username"]);
   $q2 = test_input($_POST["password"]);

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

<style>

*{
  padding: 0;
  margin: 0;
  font-family: Arial;
  box-sizing: content-box;

}


body{
  background-color: #f7f4f4;
  display: flex;
  flex-direction: column;
  align-items: center;


}

.container{
  position: relative;
  top: 50px;
  background-color: #fdfdfb;
  width: 75vw;
  height: 80vh;
  border-radius: 17px;
  box-shadow: 9px 11px 16px rgba(0,0,0,0.2);
  display: flex;
  flex-direction: row-reverse;
  justify-content: center;
  align-items: center;
}

.left_div{
  border-radius: 7px;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;}
  

.logo{
  text-align: center;
  margin-top: 30px;

}
.logo p{
  text-align: center;
  justify-content: center;
  word-wrap: break-word;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  font-family: times;
  color: grey;
}
.form_{
  margin-top: 30px;
  width: 100%;
  text-align: center;
}


.form_ input[type="password"], input[type="text"]{
  border: 2px solid #526cff;
  padding: 4px 0 4px 10px;
  margin-bottom: 10px;
  background: #ffffff;
  line-height: 34px;
  font-size: 1.1rem;
  border-radius: 12px;
  width: 29vw;
  text-align: center;
  text-decoration:none;
  transition: 0.3s;


}

.form_ input[type="password"]:focus, input[type="text"]:focus{

  width: 30vw;
  border: 2px solid #526cff;

}
.form_ input[type="submit"]{
    outline: none;
    border: 2px solid;
    background-color:  #526cff;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
    margin-bottom: 20px;
    border-radius: 7px;
    margin-top: 10px;
    width: 80px;
    padding: 5px 10px;
    font-size: 1.2rem;
    font-family: tahoma;
    font-weight: 550;

}


.form_ .dont{

  text-decoration: none;
  line-height: 20px;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  font-family: times;
  color: #6c6060e8;

}

.form_ a{

  text-decoration: none;
  font-size: 1rem;
  font-family: tahoma;
  line-height: 20px;
  font-weight: 700;
  text-decoration: none;
  color: #526cff;
  font-size: 1.2rem;
  transition: 0.4s;
  margin-left: 3px;

}


.welcome{
  color: #6c6060e8;
  margin-top: 10px;
  font-family: Arial;
  font-size: 2rem;

}

.explore{
  color: #fcfcfc;
  text-align: center;
}
.brand{
  text-decoration: none;
  color: #526cff;
  font-size: 1.95rem;
}
.right_div{

  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.3)),  url(./i2.jpg) ;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}


</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Traveller | Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">

  </head>
  <body class="body">

    <div class="container">

      <div class="left_div">

        <div class="logo">

          <h1 ><a class="brand" href="#">Welcome To UST</a></h1>
          <h1 class="welcome">Login</h1>
        </div>

        <div class="form_">
          <form method="POST" action="#">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <br>
            <input type="submit" name="" value="Login">
          </form>
          <h5 class="dont">Dont Have an Account? <a class="lll" href="#">Sign Up</a></h5>
        </div>



      </div>

      <div class="right_div">
        <h1 class="explore">Let's Explore What's There...</h1>
      </div>

    </div>

  </body>
</html>
