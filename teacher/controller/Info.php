<?php

require_once ('../model/model.php');

function fetchAllDonations(){
	return showAllDonation();

}
function fetch($username){
	return show($username);

}
function fetchAllPayments($username){
	return showAllPayment($username);

}
?>
