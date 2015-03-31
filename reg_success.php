<?php 
include 'style/style.php'; // CHECK IF THE USER HAS A STYLE COOKIE SET AND ACCESS ITS VALUE 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
  <!--- THEME CHOSEN BY USER-->
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
<!--- /THEME CHOSEN BY USER -->
</head>
<style>
body{
    background-color:#f5f5f5;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 80px;
    padding: 40px 0px 20px 0px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
}
.login-title
{
    color: #555;
    font-size: 22px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-img
{
  border-radius: 50%;
    display: block;
    height: 75px;
    margin: 0 30px 10px;
    width: 75px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-name
{
    display: block;
    margin: 30px 10px 10px;
}

.logo-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.alert {
background-position: 2% 7px;
background-repeat: no-repeat;
background-size: auto 35px;
background-color: rgba(0, 0, 0, 0);
border: 0;
min-width: auto !important;
text-align: center;
padding-left: 68px;
}
.error-notice {
  margin: 5px 5px; /* Making sure to keep some distance from all side */
}

.oaerror {
  width: 90%; /* Configure it fit in your design  */
  margin: 0 auto; /* Centering Stuff */
  background-color: #FFFFFF; /* Default background */
  padding: 20px;
  border: 1px solid #eee;
  border-left-width: 5px;
  border-radius: 3px;
  margin: 0 auto;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}

.danger {
  border-left-color: #d9534f; /* Left side border color */
  background-color: rgba(217, 83, 79, 0.1); /* Same color as the left border with reduced alpha to 0.1 */
}

.danger strong {
  color:  #d9534f;
}

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}
</style>
<?php include 'includes/header.php';?>
<body>
<div class="container">
    <div class="row">
        <center><h2>
            </h2></center>
        <div class="col-md-12">
            <div class="alert alert-success-alt alert-dismissable">
                <i class="fa fa-exclamation-triangle"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Success!</strong> Your email account <strong><?php $m=$_GET['m']; echo $m; ?></strong> has been registered</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="login">
                      <img class="profile-img" src="image/photo.png"
                    alt="">
                    <form class="form-signin" action="core/login.php" method="POST">
                      <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                      <input type="submit" name="loginbtn" class="btn btn-lg btn-default btn-block" value="Sign In" />
                    </form>
                    <div id="tabs" data-tabs="tabs">
                      <p class="text-center"><a href="#select" data-toggle="tab">Select Account</a></p>
                      </div>
            </div>
            <div class="tab-pane" id="register">
              <form class="form-signin" action="core/register.php" method="POST">
                <input type="text" name="username" class="form-control" placeholder="User Name ..." required autofocus>
                <input type="email" name="email" class="form-control" placeholder="Email Address ..." required>
                <input type="password" name="password" class="form-control" placeholder="Password ..." required>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password ..." required>
                <input type="submit" name="register" class="btn btn-lg btn-default btn-block" value="Sign Up" />
              </form>
              <div id="tabs" data-tabs="tabs">
                    <p class="text-center"><a href="#login" data-toggle="tab">Have an Account?</a></p>
                    </div>
            </div>
            <div class="tab-pane" id="select">
              <div id="tabs" data-tabs="tabs">
                <div class="media account-select">
                  <a href="#user1" data-toggle="tab">
                    <div class="pull-left">   
                      <img class="select-img" src="image/photo.png"
                    alt="">
                    </div>   
                    <div class="media-body">
                      <h4 class="select-name">Vic</h4>
                    </div>
                  </a>
                </div>
                                <hr />
                <div class="media account-select">
                  <a href="#user2" data-toggle="tab">
                    <div class="pull-left">   
                      <img class="select-img" src="image/photo.png"
                    alt="">
                    </div>   
                    <div class="media-body">
                      <h4 class="select-name">Ck Majos</h4>
                    </div>
                  </a>
                </div>
                                <hr />
                    <p class="text-center"><a href="#login" data-toggle="tab">Back to Login</a></p>
                    </div>
            </div>
            <div class="tab-pane" id="user1">
              <img class="profile-img" src="image/photo.png"
                    alt="">
              <h3 class="text-center">vic@gmail.com</h3>
              <form class="form-signin" action="core/login.php" method="post">
                <input type="hidden" class="form-control" name="email" value="vic@gmail.com">
                <input type="password" name="password" class="form-control" placeholder="Password" autofocus required>
                 
                <input type="submit" name="loginbtn" class="btn btn-lg btn-default btn-block" value="Sign In" />
              </form>
              <p class="text-center"><a href="#login" data-toggle="tab">Back to Login</a></p>
                  <p class="text-center"><a href="#select" data-toggle="tab">Select another Account</a></p>
            </div>
            <div class="tab-pane" id="user2">
              <img class="profile-img" src="image/photo.png"
                    alt="">
              <h3 class="text-center">ck@gmail.com</h3>
              <form class="form-signin" action="core/login.php" method="post">
                <input type="hidden" name="email" class="form-control" value="ck@gmail.com">
                <input type="password" name="password" class="form-control" placeholder="Password" autofocus required>
                 
                <input type="submit" name="loginbtn" class="btn btn-lg btn-default btn-block" value="Sign In" />
              </form>
              <p class="text-center"><a href="#login" data-toggle="tab">Back to Login</a></p>
                  <p class="text-center"><a href="#select" data-toggle="tab">Select another Account</a></p>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include 'includes/footer.php';?>
</html>
