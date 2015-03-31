
        <?php

        include 'database/connect.php';

        ?>

<?php

?>


        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">


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
            <input type="text" class="form-control"  placeholder="Price" name="prod_price" required>
          </div>


           <div class="form-group">
            <label>Product Description</label>
            <input type="text" class="form-control"  placeholder="Description" name="prod_description" required>
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


            if($pimage==""){
              header('location:admin_error.php');
            }
    else{

          $sql=mysql_query("INSERT INTO `Products`(prod_name,prod_type,prod_price,prod_manu,prod_desc,prod_image,prod_entered_date,prod_entered_time)
          values('$pname','$ptype','$pprice','$pmanu','$pdesc','$pimage','DATE: Auto CURDATE()',CURDATE())");


    
   header('location:adminsuccess.php');
}
        
        
        
        

    }



       



















        ?>
