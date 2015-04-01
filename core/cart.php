<?php
session_start();
if(isset($_POST['cart']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
	$prod_id 		= $_POST['prod_id'];
	$customer 		= $_SESSION['username'];
	$prod_name   	= $_POST['prod_name'];
	$prod_price   	= $_POST['prod_price'];
	$amount   		= $_POST['amount'];
	$total			= $prod_price*$amount;
$sql = "INSERT INTO carts".
"(customer,prod_id,prod_name,prod_price,amount,total)". 
"VALUES ('$customer','$prod_id','$prod_name','$prod_price', '$amount', '$total')";

mysql_select_db('batiks');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}
header("Location: ../productlist.php");
mysql_close($conn);
}
?>