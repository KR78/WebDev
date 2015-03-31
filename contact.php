<?php 
include 'style/style.php'; // CHECK IF THE USER HAS A STYLE COOKIE SET AND ACCESS ITS VALUE 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
</head>

<?php include 'includes/header.php';?>
<body>
<!-- tabbable -->

<div class="wrapper">
<div class="container">
  <div class="row">
   <div class="col-sm-12">
     <h3>Contact Us</h3>
     <div class="tabbable">
       <ul class="nav nav-tabs">
           <li class="active" ><a href="#tab1" data-toggle="tab">Location</a></li>
       </ul>
         <div class="tab-content">

           <div class="tab-pane active" id="tab1">
             <h4><span class="glyphicon glyphicon-map-marker"></span>Our location<small> &nbsp;like our Page</small></h4>

               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.087035985738!2d36.75763899999812!3d-1.28949696824056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a17112c8831%3A0x7344e235d0b7f5cc!2sGitanga+Rd%2C+Nairobi%2C+Kenya!5e1!3m2!1sen!2s!4v1425769375996" width="100%" height="300" frameborder="0" style="border:0"></iframe>

              <p> The 12-cylinder FSI® engine in the Audi A8 L W12 provides a level of exclusivity you won’t find on any other flagship luxury sedan. And the way it delivers its 500-hp is    justanother way it’s in a class all its own.
                With a strong lineage of Audi performance sedans, the S6 carries on a powerful tradition. Unrivaled performance and unparalleled craftsmanship are traits that apparently run in the familyThe 12-cylinder FSI® engine in the Audi A8 L W12 provides a level of exclusivity you won’t find on any other flagship luxury sedan. And the way it delivers its 500-hp is just </p>

                         </div><!--end of tab pane-->


                               <div class="tab-pane" id="tab2">
                                 <h4><small></small></h4>

                                    <img src="image/chevy.jpg" width="100%" height="500" alt="sect 2">

                               </div><!--end of tab 2-->
                                                            <hr>

         
       </div><!--end of tab content-->
       
     </div> <!--end of tabbable-->
     
   </div><!--end of col-sm-12-->
    
  </div><!--end of row-->
</div><!--end of container-->

<!-- end of tabble -->







<div class="container margin_bottom ">
  <div class="row">
    <div class="col-sm-6">
       

              <form>

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Subject">
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Message</label>
    <textarea class="form-control" rows="8" cols="4"></textarea>
    
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div><!--col-sm-6-->
                    
            <div class="col-sm-6 red-contact " >
              <h3><span class="red-contact">Where We Are</span></h3>
              <p>We are loccated in the outskirts of Nairobi on your way to Rongai<br/>
                 along the great Mombasa road</p>
                   <img src="image\Capture.jpg" width="550px" class="thumbnail">

                 <h3>Mailing Address</h3> <br/>

                   <h5>P.O. BOX: 3332-00100</h5><br/>
                         
                          <h4>Batik's Inc Ltd</h4><br/>

                                <p><strong>Phone:</strong><span class="red-contact"> +25472000000</span></p>
                                 <p><strong>Email: </strong><span class="red-contact">batiks@ail.com</span></p>
                                 



            </div>


  </div><!--end row-->
</div><!--end fo container-->
<div class="push"></div>
</div>
</body>
<!-- footer -->

<?php include('includes/footer.php');?>
<!-- end of footer -->
</html>
