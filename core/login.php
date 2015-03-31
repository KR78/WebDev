<?php
session_start();
?>

<?php
include '../database/connect.php';


if(isset($_POST['loginbtn'])){

	$email=mysql_real_escape_string($_POST['email']);
	$password =mysql_real_escape_string($_POST['password']);
	$password=md5($password); 

	$sql=mysql_query("SELECT * FROM `personal_data` WHERE `email`='$email' AND `password`='$password'");

    if (mysql_num_rows($sql)>0){

    	$_SESSION['username'] = $email;
        header('Location: ../productlist.php');
    	exit();
    }

else  {  

        header('Location: ../login_attempt.php');


} 

}

?>