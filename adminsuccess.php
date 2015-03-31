


    <?php

    include 'database/connect.php';

    ?>

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">

<style>
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
.alert a {color: gold;</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success-alt alert-dismissable">
                <i class="fa fa-exclamation-triangle"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Alert!</strong> Successfully entered into the database</div>
        </div>
    </div>
</div>


    <div class="container">

    <h2>Admin Panel</h2>

    <form method="POST" action="admin.php" >
      <div class="form-group">
        <label >Product Type</label>
        <select class="form-control" name="prod_type">
        <option>Wagon</option>
        <option>Saloon</option>
        <option>Hatchback</option>
        <option>SportUtility</option>         

        </select>
      </div>


      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control"  placeholder=" Product Name" name="prod_name">
      </div>



       <div class="form-group">
        <label>Product Manufacturer</label>
       <select class="form-control" name="prod_manufacturer">
            <option>Audi</option>
            <option>Bmw</option>
            <option>Benz</option>
            <option>Volvo</option>
            <option>Subaru</option>
            <option>Toyota</option>
             <option>Porche</option>
               <option>Fiat</option>
               <option>Volkswagon</option>
               <option>RangeRover</option>
        </select>
      </div>

       <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control"  placeholder="Price" name="prod_price">
      </div>


       <div class="form-group">
        <label>Product Description</label>
        <input type="text" class="form-control"  placeholder="Description" name="prod_description">
      </div>


      <div class="form-group">
        <label>Product Image</label>
        <input type="file"  name="prod_image">

      </div>



      <button type="submit" class="btn btn-default" name="submit">Upload</button>
    </form>

    </div>

    <?php

    include 'includes/footer.php';

    ?>


    <?php

    if(isset($_POST['submit'])){

      $pname=mysql_real_escape_string($_POST['prod_name']);
      $ptype=mysql_real_escape_string($_POST['prod_type']);
      $pprice=mysql_real_escape_string($_POST['prod_price']);
      $pmanu=mysql_real_escape_string($_POST['prod_manufacturer']);
      $pdesc=mysql_real_escape_string($_POST['prod_description']);
      $pimage=mysql_real_escape_string($_POST['prod_image']);



      $sql=mysql_query("INSERT INTO `Products`(prod_name,prod_type,prod_price,prod_manu,prod_desc,prod_image,prod_entered_date,prod_entered_time) values('$pname','$ptype','$pprice','$pmanu','$pdesc','$pimage',
      
      
       'DATE: Auto CURDATE()',CURDATE()                        
        )");



        

    }














    ?>

