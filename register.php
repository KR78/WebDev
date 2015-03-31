<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
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
.alert.alert-danger {
background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAARVBMVEX////7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0P7y0NAQECdhUHYsUKGdEG1l0JLSEBuYkHkukPKU8NPAAAADnRSTlMA4EDAoCAQ8IBgkDDQUFItelQAAAC0SURBVHherZBLDsMwCAVD7Nj5gvPr/Y/a0FpGLTibdnbozQJN829agPZu7/CiuxE8C76+T/hiqgruLbjqh5ip/TljZrb3AQuDKYAIYO09L3TBRq/3EHk4shCDEkZkTqITmdGMLIIO7r8FbzfaiDappSNjIkpZcCqyCDo4WAJYkR8prTp4ADSBUCIX9uPY5epL5AJdyBWDRDYFHCWyCiXBObKwrh+nl4g2TiLVhSXW97g0v/MEHIQbCYeFmYAAAAAASUVORK5CYII=);
background-color: #AE0004;
border-top: 1px solid rgba(140, 0, 0, 0.4);
border-bottom: 1px solid rgba(140, 0, 0, 0.4);
}
.alert.alert-info {
background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAADBklEQVR42u3YyWsTURwHcP8aQUWtWlu7JEbtpngQvIqXevDWm1fXehO12BTErdQiVMFQ8ODBusWkmSa1lVrTxdrG0FA9WJtkljfL19/LTDKMibl0EorkwReSCQ8+fN+bl2G2AdhSqYH+P1CpAS0DfXUI+ufzUCfaoQptYMIxsMhRsE/d0L4/BNR0qcnug4y159CmTkOLdkKNdnBQAaNEjkAZ90EOH4YcOQ51dQQVBRnLN6DHuqDFOqGZGEpbaVDICynkAVvoRUVAxuqQE8PjXC7C/AX64KG0gq3ch6sgQ1zkEBtTph2FY8JeApkYKdgCMdgMPTMP10D64kUOsTDtDsw/27FAIge9b4Y8e8EdELS0jTAh5TF2Ow5Q9l0TDDWNTYOMjSkLQREcEAdGCRfvHdFcLgI1EegQtPXY5kFactAE2JDyGHvvONrhILZ81w3QIxNQCEfw2JvYxpRYKrMdSqNLoNSzPMBGTJwEmz4HuSSGMnkWYrgjv1Rm3jZATQ5vHqT//sgRVhtmI8p0NwADbOF6EUaOX4GiZCHGzhAkD2ogUD20XxNw5baXhRN2G2EvR+QwhqFDme91YJgiQfpyCTamkTAHaQm97p1DauIBR1jxWI14CHMNuqZCmbsKmcKYBLkYQzkA9m3APRA/P6TxrvztbCfYkoOoqgKVydTQ5ZIYMdgKQ91wD8SHvj7JAYXb2T5jmqEkhiEnHnNIESb7po72joCK/Ntray8sRD7UBkVeGoBEIQilwYFRUwFU9HmIrdzjCHtpKNJXP48FqSfIfspe2jf+Sj4P2UOMnOKQfCOE6Ye0eMdqZR+yr/fwc8icXA2QmnzCD7pCI+JiH8SFPt4KYXYjO7YTLDFYPZCensu3QakjzC2I8zcJsguZsR3IvNoOfWO2eiA+tJ9jfI9Q+qEkn1JGoCz1UW5D+/HSnFhNUCqVQjwezyUajSIUChW+02/VB42OjqJMaqCtB5qZmUEgEIDf73eEXxMEofogPtLpNHp6euDz+Xhyn+lauUm1tx81UMXzBw5wT9JYWi53AAAAAElFTkSuQmCC);
border-top:1px solid rgba(255, 165, 0,0.4);
border-bottom:1px solid rgba(255, 165, 0,0.4);
color:  rgb(225, 75, 0);
}
.alert.alert-success {
background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAqFBMVEX////w8PDw8PDw8PDw8PDw8PDw8PDw8PDW1tbn5+ff398PnVjd3d3i4uIPnVjk5OQPnVjg4OAPnVgzqW8PnVgPnVjT09Pw8PDG4NOp1sBjvJHu7u4PmVYqp2ri6+YcomFHsn4bmlzHzsoPnFeuxbl9tJk0n2t/xqSVvqqNzK1ZqYKJuaJVt4c4rHQnnWPl5eXj4+MPm1fe3t6b0bfc3NxBo3TY2NjX19eKj23kAAAAFXRSTlMA8BCwcFCgkP4f3NDnrzCHoM8Qc/Avz3otAAAA9klEQVR4Xq2T2XKDMAwAMRACNGdbyUDus/d9/f+f1VHEiFamfcm+7qIZGTs4IWEcGeswURz6dGIbJCrp0MeC6QTBCADO2Hetokv+vNXbyvnLAc9v8cA+NH4/veAFEr/f7HIe0OJvETMKYhLlLw8fiNinICKxnHHCfr92QY8CcwwAloX41cFjSoElCnBU89pvkeCAeAPH4or89Bp1YG+g5uUOPQEP5wWbgZzjPRDiU1mTmD/wggyvGVspZgCP4rGvjrpYuAWFTP+sounzwPO7n8SnNEBdmGesGZLUV+6V/ZilLt7F+6/95BMxHf71cCZfefbf0zsl3w3QOjVy6QFpAAAAAElFTkSuQmCC);
border-top:1px solid limegreen;
border-bottom:1px solid limegreen;
}  
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
            <div class="tab-pane" id="login">
                      <img class="profile-img" src="image/photo.png"
                    alt="">
                    <form class="form-signin" action="core/login.php" method="POST">
                      <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                      <input type="submit" name="loginbtn" class="btn btn-lg btn-default btn-block" value="Sign In" />
                    </form>
                    <div id="tabs" data-tabs="tabs">
                      <p class="text-center"><a href="#register" data-toggle="tab">Need an Account?</a></p>
                      <p class="text-center"><a href="#select" data-toggle="tab">Select Account</a></p>
                      </div>
            </div>
            <div class="tab-pane active" id="register">
              <form class="form-signin" action="core/register.php" method="POST">
                <input type="text"  name="firstname" class="form-control" placeholder="Firstname..." required>
                <input type="text"  name="lastname" class="form-control" placeholder="Lastname..." required>
                <input type="email" name="email" class="form-control" placeholder="Email Address ..." required>
                <input type="text" name="tel" class="form-control" placeholder="Mobile No..." required>
                <input type="password" name="password" class="form-control" placeholder="Password ..." required>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password ..." required>
                <input type="submit" role="button" name="register" class="btn btn-lg btn-default btn-block" value="Sign Up" />
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
