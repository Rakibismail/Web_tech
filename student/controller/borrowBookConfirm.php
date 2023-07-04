<?php

require_once '../model/model.php';

session_start();



if (isset($_POST['submit'])) {

   $amountErr = $locationErr = $nameErr = $websiteErr =$error= "";

  $usernameErr=$passwordErr="";

 $confirmpasswordErr="";

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $nameErr= "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);
$nameErr= "";

  }


    if(empty($_POST["code"]))
    {
      $codeErr= "Code is required";
      $flag=0;
    }
    else {
      $code=test_input($_POST["code"]);
      $codeErr= "";
    }

    if(empty($_POST["date"]))
    {
      $dateErr= "Date is required";
      $flag=0;
    }
    else {
      $date=test_input($_POST["date"]);
      $sectionErr= "";
    }






if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['name']=$name;
  $data['code']=$code;
  $data['date']=$date;


  if (addBorrowBookInfo($data)) {
    header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'nameErr' => $nameErr,
   'codeErr' => $codeErr,
   'dateErr' => $dateErr,

);
     header("location:../view/borrowBookConfirm.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
