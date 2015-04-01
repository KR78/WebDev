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
<div class="container">
     <div class="row">
        <center><h2>
            </h2></center>
        <div class="col-md-12">
            <div class="alert alert-success-alt alert-dismissable">
                <i class="fa fa-exclamation-triangle"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Error!</strong> You already have this item in your cart!</div>
        </div>
    </div>
</div>


