<?php

    include "../config.php";

    $quantity = $_POST['Qnt'];

    $Channel = $_POST['Chan'];

    $column = array('Action','Itemnumber','Title','Listingsite','Currency','Startprice','BuyItNowprice','Availablequantity','Relationship','Relationshipdetails','Itemnumber','Customlabel','channel');

    $query =" SELECT * FROM ebayListings WHERE 1 ";  

    if($quantity != ""){
        $sql =  "SELECT lowStock FROM `lowStockDetails` ORDER BY id DESC LIMIT 1" ;

        $result_1 = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result_1)){
            $allSku = $row['lowStock'];
            $deJeson = json_decode($allSku);
            $Sku = array_column($deJeson,'Sku');
        }


        foreach($Sku as $key =>$skuValue){ 

            if($key == 0 )
            {
                $query .= " AND ( ";
            }

            if($quantity == "lowQuantity" ){
                $query .= "Customlabel LIKE '%".$skuValue."%'  ";
            }else if($quantity == "Others"){
                $query .= "Customlabel NOT LIKE '%".$skuValue."%'  ";
            }

            if($key+1 !== count($Sku)){
                if($quantity == "lowQuantity" ){
                    $query .= " OR ";
                }else if($quantity == "Others"){
                    $query .= " AND ";
                }
            }
            if($key+1 == count($Sku)){
                $query .= " ) ";
            }
        }
    }

    if($Channel != ""){
        $query .= " AND channel = '$Channel'  ";
    }



    $number_filter_row = mysqli_num_rows(mysqli_query($con, $query));

    $result = mysqli_query($con, $query);

    $data = array();

    while($row = mysqli_fetch_array($result))
    {

        $sub_array = array();
        $sub_array[] = $row['Action'];
        $sub_array[] = $row['Itemnumber'];
        $sub_array[] = $row['Title'];
        $sub_array[] = $row['Listingsite'];
        $sub_array[] = $row['Currency'];
        $sub_array[] = $row['Startprice'];
        $sub_array[] = $row['BuyItNowprice'];
        $sub_array[] = $row['Availablequantity'];
        $sub_array[] = $row['Relationship'];
        $sub_array[] = $row['Relationshipdetails'];
        $sub_array[] = $row['Customlabel'];
        //$sub_array[] = $row['channel'];
        
        $data[] = $sub_array;

    }

    function count_all_data($con)
    {
        $query = "SELECT * FROM ebayListings";
        return mysqli_num_rows(mysqli_query($con, $query));
    }

    $output = array(
    "recordsTotal"   =>  count_all_data($con),
    "recordsFiltered"  =>  $number_filter_row,
    "data"       =>  $data
    );

    echo json_encode($output);