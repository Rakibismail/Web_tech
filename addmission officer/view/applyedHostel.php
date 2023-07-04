<?php
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

    <!-- <?php include("viewProfileStudentView.php") ?> -->
 <!-- <div class='sidenav'>
    <br><a href='dashboardStudentView.php'>Dashboard</a>
    <br><a href='postAdStudentView.php'>Post ad</a> -->
    <!-- <br><a href='viewProfileStudentView.php'>View Profile</a> -->
    <!-- <br><a href='editProfileStudentView.php'>Edit Profile</a> -->
    <!-- <br><a href='changeProfilePictureView.php'>Change Profile Picture</a> -->
   <!-- <br><a href='changePasswordStudentView.php'>Change Password</a>
     <br><a href ='../Controller/logoutStudentController.php'>Logout </a>
   </div > -->

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="allotCourse.php" class="w3-bar-item w3-button">Allot Course</a><br>
     <a href="addStudent.php" class="w3-bar-item w3-button">Add Student</a><br>
     <a href="liveSearch.php" class="w3-bar-item w3-button">Search Student</a><br>
     <a href="applyedCourse.php" class="w3-bar-item w3-button">Applyed Course by Student</a><br>
     <a href="applyedHostel.php" class="w3-bar-item w3-button">Applyed Hostel by Student</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-grey" style="margin-top:150px">
  <?php
require_once '../controller/Info.php';

$report = fetchAllHostels();

?>



<table border="1" style="width:100%;padding:10px;">
<thead>
  <tr>
    <th>Applyed By</th>
    <th>ID</th>
    <th>Preferred Hostle</th>



  </tr>
</thead>
<tbody>
  <?php foreach ($report as $i => $report): ?>
    <tr>
      <td><?php echo $report['USERNAME'] ?></td>
        <td><?php echo $report['ID'] ?></td>
      <td><?php echo $report['BUILDING'] ?></td>

    </tr>
  <?php endforeach; ?>


</tbody>


</table>
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
