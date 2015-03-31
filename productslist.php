<?php 
include 'style/style.php'; // CHECK IF THE USER HAS A STYLE COOKIE SET AND ACCESS ITS VALUE 
?>
<!DOCTYPE html>
<?php include 'includes/header.php'; ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Carousel Product Cart Slider - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
     .btn-product{
    width: 100%;
}
a.list-group-item {
    height:auto;
    min-height:220px;
}
a.list-group-item.active small {
    color:#fff;
}
.stars {
    margin:20px auto 1px;    
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="well">
        <h1 class="text-center">Our Products</h1>

        <div class="list-group">
<?php
include 'database/connect.php';
$query = mysql_query("SELECT * FROM products") or die(mysql_error());
while ($row=mysql_fetch_assoc($query)) 
{
?>
          
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive"  src="<?php echo $row['prod_image'] ?>" alt="Car" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> <?php echo $row['prod_name']?> </h4>
                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. 
                        Vel et nonumy gubergren, ad has tota facilis probatus. Ea legere legimus tibique cum, sale tantas vim ea, eu vivendo expetendis vim. Voluptua vituperatoribus et mel, ius no elitr deserunt mediocrem. Mea facilisi torquatos ad.
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <h2> Ksh <?php echo $row['prod_price']?> <small> only </small></h2>
                    <button type="button" class="btn btn-default btn-lg btn-block"> Buy Now! </button>
                    <div class="stars">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <p> Average 4.5 <small> / </small> 5 </p>
                </div>
        
          <?php } ?>
        </div>

        </div>
    </div>
</div>
</body>
<?php include 'includes/footer.php'; ?>
</html>
