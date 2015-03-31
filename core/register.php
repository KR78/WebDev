<?php


if(isset($_POST['register']))

{

	$firstname=mysql_real_escape_string($_POST['firstname']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$email=mysql_real_escape_string($_POST['email']);
	$tel=mysql_real_escape_string($_POST['telephone']);
	$password=mysql_real_escape_string($_POST['password']);
	$confirm_password=mysql_real_escape_string($_POST['confirm_password']);
	

	$confirm_code=md5(uniqid(rand()));
	
	/* || Unique Salt to combine with BCRYPT Hash || */ 
	
	$salt=mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);

	/* || Password hash using BCRYPT combined with our unique salt || */ 
	
	$password = $password=md5($password); 

	//$link="localhost/webdev/confirm.php?f=$fname&l=$lname&passkey=$confirm_code";


	$con=mysql_connect("localhost","root","");

	mysql_select_db("batiks",$con);


	      $check_user=mysql_query("SELECT email FROM `personal_data`WHERE `email`='$email'");

	$email_check=mysql_num_rows($check_user);

	      if($email_check>0){ 


  	            echo "The email already exists in our databases";

                    exit();
}
       
 


     else{

	$sql=("INSERT INTO `personal_data`(`firstname`,`lastname`,`email`,`telephone`,`password`) VALUES ('$firstname','$lastname','$email','$tel','$password')");
    mysql_query($sql);
		   

    header("location: ../reg_success.php?m='$email'");

    exit();


}



}



?>