<?php
session_start();

if(isset($_POST['cart']))


{
	$prod_id 		= $_POST['prod_id'];
	$customer 		= $_SESSION['username'];
	$prod_name   	= $_POST['prod_name'];
	$prod_price   	= $_POST['prod_price'];
	$amount   		= $_POST['amount'];

	$conn = mysqli_connect("localhost","root","", "batiks") or die("Error " . mysqli_error($conn)); 

	$query = "INSERT INTO `carts`('customer','prod_id','prod_name','prod_price','amount') VALUES ('$customer','$prod_id','$prod_name','$prod_price', '$amount')";

	mysqli_query($conn,$query); 


}
?>
