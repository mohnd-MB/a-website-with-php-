<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>University Of Science & Technology</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
<nav>
   <img src="photos/logo.jpg" class="logo">
    <div class="nav-links" id="NavLinks">    
        <img src="photos/close.png" onclick="HideMenu()">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#faculties">Faculties</a></li>
            <li><a href="#diploma">Diplomas</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
    </div>
    <img src="photos/menu" class="menu" onclick="ShowMenu()">
</nav>
<div class="text-box">
    <h1>The First Private University In Yemen</h1>
    <a href="" class="btn">Visit Us To Know More</a>


</div>

</section>

<!--------faculties---------->
<a name="faculties"></a>
<section class="faculties">
    <h1>Discover Our Faculties</h1>
    <p>Discover the faculties which makes UST a special place to live and study</p>
    <div class="row">
        <div class="med">
            <img src="photos/doc.jpg">
           <a href="med.html"> <div class="layer">
                <h3>Faculty Of Medicine</h3>
            </div></a>
        </div>    
        <div class="bm">
            <img src="photos/bm.jpeg">
           <a href="hs.html"> <div class="layer">
                <h3>Faculty Of Human Science</h3>
            </div></a>
        </div>   
        <div class="eng">
            <img src="photos/eng.jpeg">
            <a href="eng.html"><div class="layer">
                <h3>Faculty Of Eng & Computing</h3>
            </div></a>
        </div>     
    </div>  
</section>


<!--------Diploma------>
<a name="diploma"></a>
<section class="diploma">
    <h1>Discover Our Diplomas</h1>
    <br><br><br>
    <div class="row1">
        <div class="dip">
            <img src="photos/gd.jpeg">
            <h3>Graphic Design</h3>
            <p>Graphic design is a craft where professionals create visual content to communicate messages.
                 By applying visual hierarchy and page layout techniques,
                 designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs,
                  to optimize the user experience</p>
                  <a href="#feedback" class="btn">Feedback</a>
        </div>
        <div class="dip">
            <img src="photos/x-ray.jpeg">
            <h3>X-rays</h3>
            <p>Operate radiologic equipment to produce images of the body for diagnostic purposes.
                 Position radiologic equipment and adjust controls to set exposure time and distance according to specification of examination.
                 Take x-rays following established radiologic requirements and regulations to ensure patient care and safety.</p>
                 <a href="#feedback" class="btn">Feedback</a>
        </div>
        <div class="dip">
            <img src="photos/accounting.jpeg">
            <h3>Accounting</h3>
            <p>Accounting is the process of recording financial transactions pertaining to a business.
                 The accounting process includes summarizing, analyzing, and reporting these transactions to oversight agencies, regulators, and tax collection entities</p>
                 <a href="#feedback" class="btn">Feedback</a>
        </div>
    </div>



</section>

<!-------feedback-------->

<a name="feedback"></a>
<section class="feedback">
    <h1>Feedback</h1>
    <div class="feedback-form">
        
        <form id="feedback-form" method="post" action="feedback.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="number" type="tel" class="form-control" placeholder="Your Phone Number" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="feedback" class="form-control" placeholder="Feedback" rows="4" required></textarea><br>
            <input type="submit" class="form-control submit" value="Send Feedback">
        </form>
    </div>


</section>

<!------About Us------>
<a name="about"></a>
<section class="about-us">
    <h4>About Us</h4>
    <p>The University of Science and Technology is a private university in Yemen that was established in 1994.<br>
         Its main headquarters is in Aden.<br> The university ranks 117th in the ranking of Arab universities and the first locally.</p>
     <div class="icons">
       <a href=""><img src="photos/facebook.png"></a>
       <a href=""><img src="photos/insta.png"></a>
       <a href=""><img src="photos/twitter.png"></a>
     </div>
     <p>Made by Ghazi Nail</p>


</section>

<!-----------java script----------->
<script>
    var NavLinks = document.getElementById("NavLinks");
    function ShowMenu(){
        NavLinks.style.right = "0";
        
    }
    function HideMenu(){
        NavLinks.style.right = "-200px";
    }
</script>

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
   $q2 = test_input($_POST["number"]);

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






</body>
</html>