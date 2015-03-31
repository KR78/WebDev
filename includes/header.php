<?php session_start(); ?>
<?php 
include 'style/style.php'; // CHECK IF THE USER HAS A STYLE COOKIE SET AND ACCESS ITS VALUE 
?>
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/custom/styles.css">
<?php include 'style/style.php';?>
   <style>
        body {
    padding: 9px 0px;
  }
  .navbar-collapse {
    position: relative;
    padding-top: 30px !important;
    max-height: 270px;
  }
  .navbar-collapse form[role="search"] {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 100%;
    padding: 0px;
    margin: 0px;
    z-index: 0;
  }
  .navbar-brand{
    position: relative;
    right:53px;
  }
  .navbar-collapse form[role="search"] button,
  .navbar-collapse form[role="search"] input {
    padding: 8px 12px;
    border-radius: 0px;
    border-width: 0px;
    color: rgb(119, 119, 119);
    background-color: rgb(248, 248, 248);
    border-color: rgb(231, 231, 231);
    box-shadow: none;
    outline: none;
  }
  .navbar-collapse form[role="search"] input {
    padding: 16px 12px;
    font-size: 14pt;
    font-style: italic;
    color: rgb(160, 160, 160);
    box-shadow: none;
  }
  .navbar-collapse form[role="search"] button[type="reset"] {
    display: none;
  }

  @media (min-width: 768px) {
    .navbar-collapse {
      padding-top: 0px !important;
      padding-right: 38px !important;
    }
    .navbar-collapse form[role="search"] {
      width: 38px;
    }
    .navbar-collapse form[role="search"] button,
    .navbar-collapse form[role="search"] input {
      padding: 15px 12px;
    }
    .navbar-collapse form[role="search"] input {
      font-size: 18pt;
      opacity: 0;
      display: none;            
            height: 50px;
    }
    .navbar-collapse form[role="search"].active {
      width: 100%;
    }
    .navbar-collapse form[role="search"].active button,
    .navbar-collapse form[role="search"].active input {
      display: table-cell;
      opacity: 1;
    }
      .navbar-collapse form[role="search"].active input {
      width: 100%;
    }
  }
  /*Search*/
  .search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 20%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  top: -1px;
  z-index: 2;
  width: 34px;
  height: 20px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}
/* css to push footer to the bottom of the page*/
* {
margin: 0;
}
html, body {
height: 100%;
}
.wrapper {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 0 auto -4em;
}
.footer, .push {
height: 4em;
}
   </style>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php">Batik's Ltd</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" style="position:relative; right:40px;">
<!-- || Check If The Current URL is /index.php. If so, display <li> tag with the active class else the one without || -->
          <?php $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          if($host == 'localhost/wdev/index.php') 
          {
          echo '<li class="active" ><a href="./index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>';

          }
          else
          {
          echo '<li><a href="./index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>';
          } ?> 

          <?php $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          if($host == 'localhost/wdev/about.php') 
          {
          echo '<li class="active" ><a href="./about.php"><i class="fa fa-briefcase"></i>&nbsp;About us</a></li>';

          }
          else
          {
          echo '<li><a href="./about.php"><i class="fa fa-briefcase"></i>&nbsp;About us</a></li>';
          } ?>
<!-- || Check If The Current URL is /contant.php. If so, display <li> tag with the active class else the one without || -->
          <?php $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          if($host == 'localhost/wdev/contact.php') 
          {
          echo '<li class="active"><a href="./contact.php"><i class="fa fa-phone-square fa-lg"></i>&nbsp;Contact us</a></li>';
          }
          else
          {
          echo '<li><a href="./contact.php"><i class="fa fa-phone-square fa-lg"></i>&nbsp;Contact us</a></li>';
          } ?>
          <li class="dropdown">
          <a href="./productlist.php"><i class="fa fa-suitcase fa-lg"></i> Products <!--<b class="caret"></b>--></a>
              <!--<ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>-->
          </li>
        </ul>
          <ul class='nav navbar-nav navbar-right' style='position:relative; left:50px;'>  
             <li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-cog'></i>&nbsp;Themes <b class='caret'></b></a>
              <ul class='dropdown-menu'>
              <li><a href='index.php?choice=cyborg'><i class='fa fa-chevron-circle-right'></i>&nbsp;Default</a></li>
              <li><a href='index.php?choice=cosmo'><i class='fa fa-chevron-circle-right'></i>&nbsp;Cosmo</a></li>
              <li><a href='index.php?choice=united'><i class='fa fa-chevron-circle-right'></i>&nbsp;United</a></li>
              <li><a href='index.php?choice=readable'><i class='fa fa-chevron-circle-right'></i>&nbsp;Readable</a></li>
              <li><a href='index.php?choice=sandstone'><i class='fa fa-chevron-circle-right'></i>&nbsp;Sandstone</a></li>
              <li><a href='index.php?choice=superhero'><i class='fa fa-chevron-circle-right'></i>&nbsp;Superhero</a></li>
              <li><a href='index.php?choice=simplex'><i class='fa fa-chevron-circle-right'></i>&nbsp;Simplex</a></li>
              <li><a href='index.php?choice=journal'><i class='fa fa-chevron-circle-right'></i>&nbsp;Journal</a></li>
              <li><a href='index.php?choice=lumen'><i class='fa fa-chevron-circle-right'></i>&nbsp;Lumen</a></li>
              <li><a href='index.php?choice=slate'><i class='fa fa-chevron-circle-right'></i>&nbsp;Slate</a></li>
              <li><a href='index.php?choice=spacelab'><i class='fa fa-chevron-circle-right'></i>&nbsp;Spacelab</a></li>
              <li><a href='index.php?choice=default'><i class='fa fa-chevron-circle-right'></i>&nbsp;Plain</a></li>
              <li><a href='index.php?choice=flatly'><i class='fa fa-chevron-circle-right'></i>&nbsp;Flat</a></li>
              <li><a href='index.php?choice=darkly'><i class='fa fa-chevron-circle-right'></i>&nbsp;Fladark</a></li>
              <li><a href='index.php?choice=paper'><i class='fa fa-chevron-circle-right'></i>&nbsp;Paper</a></li>
              </ul>
              </li>
          <?php 
            if(!isset($_SESSION['username']) || $_SESSION['username'] == "")
            {
            echo "
            <li><a href='./login.php'><i class='fa fa-shopping-cart'></i> Cart (0)</a></li>
            <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>&nbsp;Members <b class='caret'></b></a>
            <ul class='dropdown-menu'>
            <li><a href='./register.php'><i class='fa fa-pencil-square-o'></i> Register</a></li>
            <li><a href='./login.php'><i class='fa fa-sign-in'></i> Sign In</a></li>
            <!--<li><a href='#'>Something else here</a></li>-->
            <!--<li class='divider'></li>-->
            <!--<li><a href='#'>Separated link</a></li>-->
            </ul>
            </li>";
            }
            else if($_SESSION['username'] !== "") {
            echo "
            <li><a href='./cart.php'><i class='fa fa-shopping-cart'></i> Cart (0)</a></li>
            <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>&nbsp; ".$_SESSION['username']." <b class='caret'></b></a>
            <ul class='dropdown-menu'>
            <li><a href='./core/logout.php'><i class='fa fa-sign-out'></i> Log Out</a></li>
            <li><a href='./admin.php'><i class='fa fa-sign-in'></i> Admin</a></li>
            <!--<li><a href='#'>Something else here</a></li>-->
            <!--<li class='divider'></li>-->
            <!--<li><a href='#'>Separated link</a></li>-->
            </ul>
            </li>";
            }
            ?>
        </ul>


    
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<br><br>

