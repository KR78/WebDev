<?php include 'includes/header.php'; ?>
<title>Product Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style type="text/css">
        .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 30px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: left;
    width: 100%;
    background-color: #fff;
    margin-bottom: 40px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 200px;
}
.item.list-group-item .thumbnail
{
    margin-left: 20px;
}
.item.list-group-item .caption
{
    padding: 0px 0px 0px 0px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
@media screen and (max-width : 480px) {
    #fwslider{
        display: none;
    }
    }
.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}
    </style>

          <div class="container-well">
    <div class="well well-sm">
        <strong>Our Products</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    
<div id="products" class="row list-group">
<?php
include 'database/connect.php';
$query = mysql_query("SELECT * FROM products") or die(mysql_error());
while ($row=mysql_fetch_assoc($query)) 
{
?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" height="400px;" width="384px;" src="<?php echo $row['prod_image'] ?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $row['prod_name']?> </h4>
                    <p class="group inner list-group-item-text">
                        Year: <?php echo $row['year']?> </h4>
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                 Ksh <?php echo $row['prod_price']?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <form action="core/cart.php" method="POST" id="cart">
                        <input type="hidden" name="prod_id"    value=<?php echo $row['prod_id']?>>
                        <input type="hidden" name="prod_name"  value=<?php echo $row['prod_name']?>>
                        <input type="hidden" name="prod_price" value=<?php echo $row['prod_price']?>>
                        <input type="hidden" name="username"   value=<?php echo $_SESSION['username']?>>
                        <label for="">Amount</label>
                        <select name="amount">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <input type="submit" class="btn btn-info" name="cart" value="Add To Cart" />
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>

<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
