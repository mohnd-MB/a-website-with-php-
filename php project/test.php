<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>small test </title>

    
    <!--<link rel="stylesheet" href="major.css">-->
    <script src="major.js"></script>

    <style>

body{
    background-repeat: no-repeat;
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    scroll-behavior: smooth;
}

/*
   color: #2b2d42ff;
   color: #8d99aeff;
   color: #edf2f4ff;
   color: #ef233cff;
   color: #d90429ff;
*/


.head {
    background-image: url(UST.jpg);
    background-repeat: no-repeat;
    text-align: center;
    background-size: cover;
    padding: 250px;
    background-attachment: fixed;
}

.t1 {
    text-shadow: 0.2px 0.2px #000000;
    font-size: xx-large;
    color: rgba(0, 0, 0, 0.5);
    font-weight: bolder;
}


.css-grid {
    display: grid;
    grid-template-areas:
        "b1 b1 b1 b1"
        "b7 b7 b7 b7"
        "b2 b2 b2 b2"
        "b3 b3 b3 b3"
        "b4 b4 b4 b4";
    gap: 25px;
    background-image: url(back.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.smp{
    grid-area: b7;
    background-color: rgba(143, 14, 29, 0.685);
    color: white;
    font-size: x-large;
    padding: 150px;
}


p{
    padding-left: 80px;
}








.box1 {
    grid-area: b1;
}

.hd {
    border: none;
    border-radius: 20px;
    width: 220px;
    height: 50px;
    background-color: #d90429ff;
    transition: 0.5s ease;

    
}

.hd:hover {
    background-color: rgb(255, 255, 255);
    transition: 0.5s ease;
}
a {
    text-decoration: none;
    color: rgb(255, 255, 255);
    transition: 0.5 ease;

    border: none;
    font-size: x-large;
    font-weight: bolder;
}
a:hover {
    color: #d90429ff;
    text-decoration: none;
    transition: 2.5 ease;
}
.box2 {
    grid-area: b2;
}
.bt{
    
    padding: 100px 230px;
    margin-left: 105px;
    border: none;
    font-size: xx-large;
    color: white;
    font-weight: bold;
    border-radius: 25px;

}
.man{
    background: blue;
    transition: 0.5s ease;
}
.man:hover{
    transition: 0.5s ease;
    background: white;
    color: blue;
    border: none;

}
.women{
    background-color: pink;
    transition: 0.5s ease;
}
.women:hover{
    background-color: white;
    transition: 0.5s ease;
    color: pink;
    border: none;

}


.box3 {
    grid-area: b3;
    text-align: center;
}

input{
    padding:5px 20px ;
    border:none;
    font-size:x-large;
    background-color:#2b2d42ff;
    color: white;
}

h2{
    color:#2b2d42ff;
}


label{
    padding:5px 20px ;
    font-size:large;
    color: black;
}

textarea {
    width: 75%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 02px solid rgba(17, 17, 17, 0.24);
    border-radius: 4px;
    background-color: #ffffff;
    font-size: 16px;
    resize: none;
}



.box4 {
    grid-area: b4;
    text-align: center;
}



.footer {
    color: white;
    background-color: #000000;
    padding:25px;
    text-align:center;
}
    </style>
  

</head>

<body>
    <div class="head">
        <h1 class="t1">University of Science and Technology</h1>
    </div>

    <div class="css-grid">

        <div class="box1">
            <form action="" method='post'>
<button class="hd"><a href="abd/index.php">welcome</a></button>
<button class="hd"><a href="VSY/ymsa.php">std home </a></button>
<button class="hd"><a href="22">std com NO</a></button>
<button class="hd"><a href="mohmd/default.php">std info</a></button>
<button class="hd"><a href="university/main.php">avaliable majors</a></button>
<button class="hd"><a href="test.php">small test </a></button>
</form>
        </div>

        <div class="box2">
            <button class="bt man" id="btw" onclick="changeman()">male</button>
            <button class="bt women" id="btm" onclick="changewomen()">female</button>
        </div>

    <div class="smp">
        <h1>hello dear student</h1>

        <p>hear we will ask you a few question so we could help through your journay and make sure that you have choose the right major for you
       so if you have read choose your major how about we start the smaal test</p>
    </div>



        <div class="box3"> 
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <br>
                <h2>where have you heard about UST</h2>
                <br>
                <input type="radio" name="qs1" value="facebook">
                    <label>facebook</label>
                <input type="radio" name="qs1" value="instagram">
                    <label >instagram</label>
                <input type="radio" name="qs1" value="friends">
                    <label>friends</label>
                    <input type="radio" name="qs1" value="twitter">
                    <label>twitter</label>

                <br><br><br>

      
                <h2>what is your best subject</h2>
                <br>
                <input type="radio" name="qs2" value="math">
                    <label>math</label>
                <input type="radio" name="qs2" value="science">
                    <label >science</label>
                <input type="radio" name="qs2" value="computer">
                    <label>computer</label>
                <input type="radio" name="qs2" value="langauge">
                    <label>langauge</label>

                <br><br><br>
                
                
                <h2>score your self from 1 to 5 in study</h2>
                <br>
                <input type="radio" name="qs3" value="1">
                    <label>1</label>
                <input type="radio" name="qs3" value="2">
                    <label >2</label>
                <input type="radio" name="qs3" value="3">
                    <label>3</label>
                <input type="radio" name="qs3" value="4">
                    <label>4</label>    
                <input type="radio" name="qs3" value="5">
                    <label>5</label>

                <br><br><br>

                <h2>can you stand infront of 100 people and read a speech</h2>
                <br>
                <input type="radio" name="qs4" value="yes">
                    <label>yes</label>
                <input type="radio" name="qs4" value="no">
                    <label >no</label>
             


                <br><br><br>
             
    </div>


        <div class="box4">
            <h3>talk about your self in short
            </h3>
            <textarea id="txt" cols="70" rows="15" name="tqs"></textarea><br><br>


            <input type="submit" value="submit" name="submit" >
            <br><br>
            </form>
        </div>



    </div>
<?php



error_reporting (E_ALL ^ E_NOTICE);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }     
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $q1 = test_input($_POST["qs1"]);
   $q2 = test_input($_POST["qs2"]);
   $q3=  test_input($_POST["qs3"]);
   $q4=  test_input($_POST["qs4"]);
   $tq = test_input($_POST["tqs"]);
 }          
    
 echo "<h2>you have choose these choices with this self talk that you have worte:</h2>";
 
echo $q1;
echo "<br>";
echo $q2;
echo "<br>";
echo $q3;
echo "<br>";
echo $q4;
echo "<br>";
echo $tq;



$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ust";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


$sql = "INSERT INTO `std`(`heard_abt`, `best_sub`, `read`, `std_name` , `point`) VALUES ('$q1','$q2','2')";
if ($conn->query($sql) === TRUE) {
 echo "Record insert it successfully";
} else {
 echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>


    <div class="footer">
        <h5>desigend by mohnd  khalid</h5>
</div>

</body>
</html>