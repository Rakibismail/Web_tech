<?php
 require_once "../javascript/applyHostel.php";

session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
       <li style="float:left"><a href="../../homepage.php"> ABC UNIVERSITY</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      <!-- <li><a href="#news">Registration</a></li> -->
      <li><a href="../../homepage.php">Home</a></li>
    </ul>

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="applyCourse.php" class="w3-bar-item w3-button">Apply Course</a><br>
     <a href="applyHostel.php" class="w3-bar-item w3-button">Apply Hostel</a><br>
     <a href="borrowBook.php" class="w3-bar-item w3-button">See Available Books</a><br>
     <a href="borrowBookConfirm.php" class="w3-bar-item w3-button">Borrow Book</a><br>
     	<a href="liveSearch.php" class="w3-bar-item w3-button">Search Course</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">

  <form class="loginbox" onclick="return validation()" method="post" action="../controller/applyHostel.php">

    <p>Your Name: </p><br> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter your name">
    <br><br>
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
    <br>
    <p>Your ID: </p><br> <input type="text" onkeypress="checkId()" onblur="checkId()" name="id" id="id" placeholder="Enter your id">
    <br><br>
    <span class="error" id="idErr">* <?php if(!empty($_GET['idErr'])){echo $_GET['idErr'];} ?></span>
    <br>
    <p>Building Name: </p><br> <input type="text" onkeypress="checkBuilding()" onblur="checkBuilding()" name="building" id="building" placeholder="Enter the building">
    <br><br>
    <span class="error" id="buildingErr">* <?php if(!empty($_GET['buildingErr'])){echo $_GET['buildingErr'];} ?></span>
    <br>
    <!-- <p>Check I:</p><br> <input type="text" onkeypress="checkSection()" onblur="checkSection()" name="section" id="section" placeholder="Enter the section">
    <br><br>
    <span class="error" id="sectionErr">* <?php if(!empty($_GET['sectionErr'])){echo $_GET['sectionErr'];} ?></span>
    <br> -->
    <!-- <p>Time:</p><br> <input type="text" onkeypress="checkTime()" onblur="checkTime()" name="time" id="time" placeholder="Enter the time">
    <br><br>
    <span class="error" id="timeErr">* <?php if(!empty($_GET['timeErr'])){echo $_GET['timeErr'];} ?></span>
    <br> -->
    <br>


    <input type="submit" name="submit" value="Submit">
  </form>

</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("location:../view/login.php");
}
 ?>
