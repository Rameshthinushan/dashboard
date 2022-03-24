<?php

include "../config.php";

$column = array('ProductID','MainImage', 'ProductName', 'SKU', 'quantity', 'delete');

$query = "
SELECT * FROM products WHERE ProductID != '' AND (SKU NOT LIKE '%-IFR%') AND (SKU NOT LIKE '%-IDE%') AND (SKU NOT LIKE '%-CA%')  
";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 AND (ParentSKU LIKE "%'.trim($_POST["search"]["value"]).'%" 
 OR SKU LIKE "%'.trim($_POST["search"]["value"]).'%" 
 OR ProductName LIKE "%'.$_POST["search"]["value"].'%") 
 ';
}

if(isset($_POST['ProductType'], $_POST['subcategory']) && $_POST['ProductType'] != '' && $_POST['subcategory'] != '')
{
 $query .= '
 AND ProductType = "'.$_POST['ProductType'].'" AND subcategory = "'.$_POST['subcategory'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY ProductID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{

 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];

}


$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));

$result = mysqli_query($con, $query . $query1);


$data = array();

while($row = mysqli_fetch_array($result))
{
 $SKU=$row['SKU'];
 $sub_array = array();
 $sub_array[] = '<div style="display: flex; justify-content: center;"><input type="checkbox" name="products[]" value="'.$row["ProductID"].'" ></div>';
 $sub_array[] = '<div style="display: flex; justify-content: center;" ><img src="'.$row["Mainimage"].'" class="img-thumbnail" width="80px"></div>';
 $sub_array[] = $row['ProductName'].'<br><b>Type : </b>'.$row['ProductType'].'<br><b>Sub Category : </b>'.$row['subcategory'].'<br><b>Type : </b>'.$row['type_id'];
 $sub_array[] = $row['SKU'];
 $sub_array[] = '<div style="display: flex; justify-content: center;" >'.$row['quantity'].'</div>';
 
 $sub_array[] = '<div class="btn-group">
 <button class="btn btn-success btnView" type="button" data-toggle="modal" data-id="'.$row["ProductID"].'"><i class="fa fa-eye"></i></button>
 <button class="btn btn-warning btnEdit" type="button" data-toggle="modal" data-id="'.$row["ProductID"].'"><i class="fa fa-edit"></i></button>
 <button class="btn btn-danger btnDelete" type="button"><i class="fa fa-times"></i></button>
 </div>';
 $data[] = $sub_array;
}

function count_all_data($con)
{
 $query = "SELECT * FROM products";
 return mysqli_num_rows(mysqli_query($con, $query));
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($con),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>