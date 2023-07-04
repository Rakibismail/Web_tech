<?php

require_once ('../model/model.php');

function fetchAllDonations(){
	return showAllDonation();

}
function fetch($username){
	return show($username);

}

function fetchAllTeachers(){
	return showAllTeacher();

}
function fetchAllStudents(){
	return showAllStudent();

}
?>
