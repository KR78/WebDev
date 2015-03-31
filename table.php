
<?php include 'includes/header.php'; ?>
<?php 
$conn=mysql_connect('localhost','root','');
mysql_select_db('batiks') or die("dead");
if (isset($_GET["id"])) 
{ 
    $id  = $_GET["id"]; 
    $sqlDelete    = "DELETE FROM personal_data WHERE id='$id'"; 
    $query  = mysql_query ($sqlDelete, $conn); 
}
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 9; 
$sql = "SELECT * FROM personal_data ORDER BY id  ASC LIMIT $start_from, 9"; 
$rs_result = mysql_query ($sql,$conn); 
?>
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style>

    .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>
<div class="wrapper">
<div class="container">
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Customers</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID #" disabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Phone Number" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Delete Customer" disabled></th>
                    </tr>
                </thead>

                <tbody>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) {
?> 
                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["telephone"]; ?></td>
                    <td><?php echo $row["email"]; $id=$row["id"]; ?>
                    <td><a href="table.php?id=<?php echo $id?>"><button class="btn btn-default"  data-toggle="confirmation" ><i class="fa fa-trash-o"></i></button></a></td>
                    </tr>
                </tbody>
<?php }; ?>

            </table>

        </div>
    </div>
</div>
</div>
<?php 
$sql = "SELECT COUNT(id) FROM personal_data"; 
$rs_result = mysql_query($sql,$conn); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 9); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a style='position:relative; left:107px;' href='table.php?page=".$i."'>".$i."</a> "; 
}; 
?>
<?php include 'includes/footer.php'; ?>
<script>
    /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>