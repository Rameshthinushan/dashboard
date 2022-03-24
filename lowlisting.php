<?php
// We need to use sessions, so you should always start sessions using the below code.
include "../config.php";
include "session.php";

                                $sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'dbs253594' AND TABLE_NAME = 'products'";

                                $result = $con->query($sql);

                                while($row = $result->fetch_assoc())

                                {

                                    $varoption .= "<option value = '".$row["COLUMN_NAME"]."'>".$row["COLUMN_NAME"]."</option>";
                                }
  

?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LEDSone | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!--Material Design Iconic Font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Image Uploader CSS -->
<link rel="stylesheet" href="dist/image-uploader.min.css">

<style>

.modal {
  overflow-y:auto;
}

.loader{
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('reload.gif') 
              50% 50% no-repeat rgb(255, 255, 255, .4);
}

</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Navbar -->
  <?php

  include("navbar.php");

  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php

  include("sidebar.php");

  ?>
  <!-- /.Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Listing Management</h1>

            <?php

            if(isset($_POST['listingssubmit']))
            {

              if(isset($_POST['csvtype']))
              {

                $type=$_POST['csvtype'];

                $csvprtype=$_POST['csvprtype'];

                if(isset($_FILES["listingsfile"]))
                {

                  $fileName = $_FILES["listingsfile"]["tmp_name"];

                  if ($_FILES["listingsfile"]["size"] > 0) {

                  $addedby=$_SESSION['name']."-csv";
  
                  $NOW=date("Y-m-d H:i:s");

                  $csvProductType=$_POST['csvProductType'];

                  $csvsubcategory=$_POST['csvsubcategory'];

                  $file = fopen($fileName, "r");

                  $flag = true;

                  $csvrow=1;

                  $addedrow=0;

                  $missedrows = array();
                  $missedrows = (array) null;

                  while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                  if($flag) { $flag = false; continue; }

                  $csvrow++;

                  $typesql="SELECT * from csvtemplatelist WHERE temp_id='".$type."' ORDER by sortorder";

                  $typeresult = $con->query($typesql);

                  $fields="type_id, uploadedon, addedby, ProductType, subcategory";

                  $values="'$csvprtype', '$NOW', '$addedby', '$csvProductType', '$csvsubcategory'";

                  $col=0;

                  while($typerow = $typeresult->fetch_assoc())

                  {

                    $datacolumn=$typerow['columnname'];

                    $data=$column[$col];

                    $checkquery = "SELECT * FROM products WHERE SKU = '".$data."'";
                    $checkresult = mysqli_query($con, $checkquery);
                    $checkrows= mysqli_num_rows($checkresult);


                    if(($datacolumn=="SKU")&&($checkrows!=0))
                    {

                      $notukflag = true;
                      array_push($missedrows, $csvrow);
                      break;

                    }

                    $data=str_replace("'","",$data);

                    if($data=="")
                    {
                      $data="";
                    }

                    $fields .= ", ".$datacolumn;

                    $values .= ", '".$data."'";

                    $col++;

                  }

                  if($notukflag) { $notukflag = false; continue; }

                  $insertquery = "INSERT INTO products(".$fields.") VALUES (".$values.")";

                  //echo $insertquery;

                  if(mysqli_query($con, $insertquery))
                  {

                    $addedrow++;

                  }

                  else

                  {

                    array_push($missedrows, $csvrow);

                  }

                }

                }

                echo $addedrow." products are added successfully out of ".($csvrow-1)." entries";

                if(!empty($missedrows))
                {

                  echo "<br> Missed rows are : ";

                  foreach($missedrows as $missedrow)
                  {
                      echo " | ".$missedrow;
                  }

                }

              }

              }

            }

            ?>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; 	font-size: 14px">

      <div class="container-fluid">

        <div class="row">

                <div class="col-lg-12 col-12">
                <!-- /.card -->

            <div class="card">

              <form name="frmProducts" id="frmProducts" method="post" action="">

              <div class="card-header">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#importlistings">

                  uplode CSV

                </button>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#filtermodal-default">

                  Filter

                </button>

                <!-- <div class="input-group" style="display:inline-flex; width:auto;">

                      <div class="input-group-prepend">

                      <button class="btn btn-default" type="button">Export CSV</button>

                      </div>

                      <select name="exporttype" class="custom-select" onchange="exportcsvtemplate();">

                      <option value="export">Select</option>

                      <?php

                                // $tempsql="SELECT * FROM csvtemplate";

                                // $tempresult = $con->query($tempsql);

                                // while($temprow = $tempresult->fetch_assoc())

                                // {

                                //     $tempoption .= "<option value = '".$temprow["tempname"]."'>".$temprow["tempname"]."</option>";
                                // }

                                // echo $tempoption;

                          ?>

                      </select>
                      
                </div> -->

              </div>
              <!-- /.card-header -->
              <div class="card-body">



              <!-- <div class="container"> 

                    <div class = "col-md-12">

                         <div class="table-responsive">  

                              <table id="demoFinal" class="table table-dark table-striped">  
                                   <thead>  
                                        <tr>

                                             <th>Action</th>

                                             <th>Item Number</th>
                                             
                                             <th>Title</th>

                                             <th>Listing Site</th>

                                             <th>Currency</th>

                                             <th>Start Price</th>

                                             <th>Buy It Now Price</th>

                                             <th>Available Quality</th>

                                             <th>Realtion Ship</th>

                                             <th>Realation Ship Deatails</th>

                                             <th>Custom Label</th>

                                             <th>Channel</th>

                                        </tr>

                                   </thead>

                              </table>

                         </div> 

                    </div>  

               </div> -->

                <table id="demoFinal" class="table table-bordered table-striped dt-responsive">

                  <thead>

                  <tr>

                    <th>Action</th>

                     <th>Item Number</th>
                                             
                      <th>Title</th>

                     <th>Listing Site</th>

                      <th>Currency</th>

                     <th>Start Price</th>

                     <th>Buy It Now Price</th>

                     <th>Available Quality</th>

                     <th>Realtion Ship</th>

                     <th>Realation Ship Deatails</th>

                     <th>Custom Label</th>

                     <!-- <th>Channel</th> -->

                  </tr>

                  </thead>

                </table>

              </div>
              <!-- /.card-body -->

              </form>

            </div>
            <!-- /.card -->

            </div>

                </div>
        <!-- /.row (main row) -->

      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong>Copyright &copy; 2021 <a href="https:www.ledsone.co.uk">LEDSone</a>.</strong>
    All rights reserved.

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->

  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--thinu -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<!--thinu -->








<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- Image Uploader Js -->
<script type="text/javascript" src="dist/image-uploader.min.js"></script>

</body>

</html>

      <!--.filter modal -->                          
      <div class="modal fade" id="filtermodal-default">

        <div class="modal-dialog" style="max-width: 900px;">

          <div class="modal-content" style="width: 100%;">

            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>

            <div class="modal-body">

            <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">Filter By channel And Quantity</h3>

              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <form  id="form_1" method="POST">
                          <div class="form-group">

                            <label for="Quantity">Quantity</label>
                                <select class="form-control" id="Quantity" name="Qnt">
                                    <option value="All">All</option>
                                    <option value="lowQuantity">Low Quantity</option>
                                    <option value="Others">Others</option>
                                </select>
                          </div>

                          <div class="form-group">

                            <label for="subcategory">channel</label>

                                <select class="form-control" id="Channel_1" name="Channel">
                                    <option value="All">All</option>
                                    <option value="Ledsone">LED sone</option>
                                    <option value="Sunsone">Sunsone</option>
                                    <option value="Electricalsone">Electricalsone</option>
                                </optgroup>
                                </select>

                          </div>
               
              </div>

                <div class="card-footer">

                <button type="submit" name="filter" id="filter" class="btn btn-primary">Filter</button>

                </div>
            </form>
            </div>

            </div>

            <div class="modal-footer justify-content-between">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.filter modal -->

      <!-- View Modal -->
      <div class="modal fade" id="viewModal" role="dialog">

        <div class="modal-dialog" style="max-width: 1200px;">

        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body viewbody">

          </div>

          <div class="modal-footer justify-content-between">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

        </div>

        </div>

        <!-- View Modal end-->

        <div class="modal fade" id="importlistings">

        <div class="modal-dialog" style="max-width: 900px;">

          <div class="modal-content" style="width: 100%;">

            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>

            <div class="modal-body">

            <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">uplode</h3>

              </div>

              <div class="card-body">

                <form action="" method="POST" enctype="multipart/form-data">

                <table class="table table-bordered">

                <tr><td>

                            <label>Select Channel</label>

                    
                </td><td>

                        <!-- <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Channel</label>
                        </div> -->
                        <select class="form-control" id="Channel" name="Channel">
                            <option selected>Choose...</option>
                            <option value="Ledsone">LED sone</option>
                            <option value="Sunsone">Sunsone</option>
                            <option value="Electricalsone">Electricalsone</option>
                        </select>
                        <!-- </div> -->
                <!-- <Select class="form-control" name="csvtype" id="csvtype">

                      <option value="">Select</option>

                      <?php

                      // $sql="SELECT * from csvtemplate";

                      // $result = $con->query($sql);

                      // while($row = $result->fetch_assoc())

                      // {

                      //     $option .= "<option value = '".$row["temp_id"]."'>".$row["tempname"]."</option>";
                      // }

                      // echo $option;

                      ?>

                </Select> -->

                </td></tr>

                <tr><td>

                            <label>Uplode CSV</label>

                    
                </td><td>

                    <input type="file" class="form-control" name="file" id="file" >
                    <!-- <input type="file" name="file" id="file" class="form-control" /> -->
                <!-- <Select class="form-control" name="csvprtype" id="csvprtype">

                      <option value="">Select</option>

                      <?php

                      // $prsql="SELECT * from types";

                      // $prresult = $con->query($prsql);

                      // while($prrow = $prresult->fetch_assoc())

                      // {

                      //     $proption .= "<option value = '".$prrow["type_id"]."'>".$prrow["typename"]."</option>";
                      // }

                      // echo $proption;

                      ?>

                </Select> -->

                </td></tr>

                <!-- <tr><td>


                            <label for="csvProductType">Category</label>

                </td><td>

                                <select class="form-control" id="csvProductType" name="csvProductType">
                                <option value="">Select</option>
                                <option value = 'Vintage Cable'> Vintage Cable </option>
                                <option value = 'Led Transformer'> Led Transformer </option>
                                <option value = 'Vintage Bulb'> Vintage Bulb </option>
                                <option value = 'Switch'> Switch </option>
                                <option value = 'Pipe Lighting'> Pipe Lighting </option>
                                <option value = 'Pendant Lights'> Pendant Lights </option>
                                <option value = 'Neon Flex'> Neon Flex </option>
                                <option value = 'Lighting Accessories'> Lighting Accessories </option>
                                <option value = 'Lampshades'> Lampshades </option>
                                <option value = 'Lamp Holder'> Lamp Holder </option>
                                <option value = 'Handles'> Handles </option>
                                <option value = 'Ceiling Rose'> Ceiling Rose </option>
                                </select>

                </td></tr> -->

                <!-- <tr><td>

                            <label for="csvsubcategory">Sub Category</label>

                </td><td>

                                <select class="form-control" id="csvsubcategory" name="csvsubcategory">
                                <option value="">Select</option>
                                <optgroup label="Vintage Cable">
                                <option value="Select">Select</option>
                                <option value="3Core Twisted">3Core Twisted</option>
                                <option value="2Core Round">2Core Round</option>
                                <option value="3Core Round">3Core Round</option>
                                <option value="2Core Twisted">2Core Twisted</option>
                                </optgroup>
                                <optgroup label="Led Transformer">
                                <option value="">Select</option>
                                <option value="Constant Current">Constant Current</option>
                                <option value="Constant Voltage IP20 5V">Constant Voltage IP20 5V</option>
                                <option value="Constant Voltage IP20 12V">Constant Voltage IP20 12V</option>
                                <option value="Constant Voltage IP20 24V">Constant Voltage IP20 24V</option>
                                <option value="Constant Voltage IP20 Mini 12V">Constant Voltage IP20 Mini 12V</option>
                                <option value="Constant Voltage IP67 12V">Constant Voltage IP67 12V</option>
                                <option value="Constant Voltage IP67 24V">Constant Voltage IP67 24V</option>
                                <option value="Constant Voltage IP67 Slim 12V">Constant Voltage IP67 Slim 12V</option>
                                <option value="Constant Voltage RainProof 12V">Constant Voltage RainProof 12V</option>
                                <option value="Constant Voltage Others">Constant Voltage Others</option>
                                <option value="Blue and Orenge">Blue and Orenge</option>
                                <option value="Sanpu Driver">Sanpu Driver</option>
                                <option value="Ultra Tin">Ultra Tin</option>
                                </optgroup>
                                <optgroup label="Vintage Bulb">
                                <option value="">Select</option>
                                <option value="Incandescent Bulbs B22">Incandescent Bulbs B22</option>
                                <option value="Incandescent Bulbs E27">Incandescent Bulbs E27</option>
                                <option value="Led Bulbs B22">Led Bulbs B22</option>
                                <option value="Led Bulbs E27">Led Bulbs E27</option>
                                <option value="Other">Other</option>
                                </optgroup>
                                <optgroup label="Switch">
                                <option value="">Select</option>
                                <option value="1 Gang Socket">1 Gang Socket</option>
                                <option value="1 Gang Socket with USB">1 Gang Socket with USB</option>
                                <option value="1 Gang Switch">1 Gang Switch</option>
                                <option value="2 Gang Socket">2 Gang Socket</option>
                                <option value="2 Gang Socket with USB">2 Gang Socket with USB</option>
                                <option value="2 Gang Switch">2 Gang Switch</option>
                                <option value="3 Gang Switch">3 Gang Switch</option>
                                </optgroup>
                                <optgroup label="Pipe Lighting">
                                <option value="">Select</option>
                                <option value="Pendant Lights">Pendant Lights</option>
                                <option value="Table Lamps">Table Lamps</option>
                                <option value="Wall Lights">Wall Lights</option>
                                <option value="Other">Other</option>
                                </optgroup>
                                <optgroup label="Pendant Lights">
                                <option value="">Select</option>
                                <option value="Pendant Holder">Pendant Holder</option>
                                <option value="Pendant Lampshade">Pendant Lampshade</option>
                                <option value="Other">Other</option>
                                </optgroup>
                                <optgroup label="Neon Flex">
                                <option value="">Select</option>
                                <option value="12V 8mm x 16mm">12V 8mm x 16mm</option>
                                <option value="230V 8mm x 16mm">230V 8mm x 16mm</option>
                                <option value="230V 17mm Round">230V 17mm Round</option>
                                <option value="230V Dome Shape 15mm x 16mm">230V Dome Shape 15mm x 16mm</option>
                                <option value="Neon Flex Accessories">Neon Flex Accessories</option>
                                </optgroup>
                                <optgroup label="Lighting Accessories">
                                <option value="">Select</option>
                                <option value="Ceiling Bracket">Ceiling Bracket</option>
                                <option value="Ceiling Hooks">Ceiling Hooks</option>
                                <option value="Connectors">Connectors</option>
                                <option value="Cord Grip">Cord Grip</option>
                                <option value="Light Chain">Light Chain</option>
                                <option value="Other">Other</option>
                                <option value="Reducer Plate">Reducer Plate</option>
                                <option value="Sand Papers">Sand Papers</option>
                                </optgroup>
                                <optgroup label="Lampshades">
                                <option value="">Select</option>
                                <option value="Metal Shades">Metal Shades</option>
                                <option value="Wall Sconces">Wall Sconces</option>
                                <option value="Wire Cages">Wire Cages</option>
                                </optgroup>
                                <optgroup label="Lamp Holder">
                                <option value="">Select</option>
                                <option value="E27 Holders">E27 Holders</option>
                                <option value="B22 Holders">B22 Holders</option>
                                </optgroup>
                                <optgroup label="Handles">
                                <option value="">Select</option>
                                <option value="Handles">Handles</option>
                                <option value="Knob">Knob</option>
                                </optgroup>
                                <optgroup label="Ceiling Rose">
                                <option value="">Select</option>
                                <option value="Multi Outlet">Multi Outlet</option>
                                <option value="Single Outlet">Single Outlet</option>
                                </optgroup>
                                </select>


                </td></tr> -->

                <!-- <tr><td>

                            <label>Upload CSV</label>

                    
                </td><td>

                  <input type="file" class="form-control" name="listingsfile" id="listingsfile" accept=".csv" >

                </td></tr> -->

                <td colspan="2" class="text-center align-middle"><input class="btn btn-danger" type="submit" name="btnUpload" value="Upload"></td>

                </table>        

                </div>

                </div>

              </form>

            </div>

            <div class="modal-footer justify-content-between">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php

        if(isset($_POST['btnUpload'])){

           $channel = $_POST['Channel'];

           if($channel == "Choose..."){

            echo "<script>
                        
                    alert('Please Select Channel')

                </script>";

            }else{
                    if($con){

                            $file_1 = $_FILES['file']['tmp_name'];
                            
                            //print_r($file_1);
                             $handel = fopen($file_1,"r");

                            // //print_r($handel);
                            
                            $i = 0;

                             while(($cont = fgetcsv($handel , 10000000 , "," ))!== false)

                             {
                                $channel = $_POST['Channel'];

                                //$table =rtrim( $_FILES['file']['name'],".csv");


                                        $action = $cont[0];

                                        $itemNum = $cont[1];

                                        $title = $cont[2];

                                        $listion = $cont[3];

                                        $currency = $cont[4];

                                        $startPrice = $cont[5];

                                        $buyIt = $cont[6];

                                        $avalible = $cont[7];

                                        $realtion_1 = $cont[8];

                                        $realtion_2 = $cont[9];

                                        $customLabel = $cont[10];

                                    if(empty($title)&&empty($listion)&&empty($currency)){

                                        $sql =  "SELECT Title,Listingsite,Currency FROM ebayListings ORDER BY id DESC LIMIT 1" ;
                                       

                                        $result = mysqli_query($con,$sql);

                                        while($row = mysqli_fetch_array($result)){

                                            $action = $row['Action'];
                                            $itemNum = $row['Itemnumber'];
                                            $title = $row['Title'];
                                            $listion = $row['Listingsite'];
                                            $currency = $row['Currency'];
                                        }
                                }


                                    $query = "INSERT INTO ebayListings (Action,Itemnumber,Title,Listingsite,Currency,Startprice,BuyItNowprice,Availablequantity,Relationship,Relationshipdetails,Customlabel,channel) VALUES ('$action','$itemNum','$title','$listion','$currency','$startPrice','$buyIt','$avalible','$realtion_1','$realtion_2','$customLabel','$channel')";


                                    if(mysqli_query($con,$query)){
                                      $i++;
                                    }
                        }

                        if($i>0){
                          echo "<script>
                        
                              alert('added')

                          </script>";
                        }else{
                          echo "<script>
                        
                              alert('not added')

                          </script>";
                        }
                    }else{
                      echo "<script>
                        
                          alert('connection failed')

                      </script>";
                    }

                 }

        }


      ?>

      
<script>


 $(document).ready(function(){

            var demoFinal = $('#demoFinal').DataTable({
                "processing":true,
                "serverSide":true,
                'serverMethod': 'post',
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                "order" : [],
                columnDefs: [ {
                    'targets': [0], 
                    'orderable': false,
                    }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "iDisplayLength": 25,
                "searching" : true,
                "ajax":{
                       url:"lowlistingGet.php",
                       data : function(data){
                        var Quentity = $('#Quantity').val();
                         if (Quentity == "All") {
                              Quentity = "";
                         }
                         // Append to data
                         data.Qnt = Quentity;
                         // filter by shipping service end
                        var Channel = $('#Channel_1').val();
                         if (Channel == "All") {
                              Channel = "";
                         }
                         // Append to data
                         data.Chan = Channel;
                         // filter by shipping service end
                        console.log(data);
                       }
                    }
                    
            });

             $(document).on('submit', '#form_1', function(event) {
               event.preventDefault();
               refreshTable();
                $('#filtermodal-default').modal('hide');
               // hide the modal - start
               //$('#exampleModal').modal('hide');
               // hide the modal - end
          });

            function refreshTable() {
               demoFinal.clear();
               demoFinal.draw();

          }


        });

  
//  $(document).ready(function(){
  
//   fill_datatable();
  
//   function fill_datatable(ProductType = '', subcategory = '')
//   {
    
//    var dataTable = $('#example1').DataTable({
//     "processing" : true,
//     "responsive": true,
//     "serverSide" : true,
//     "order" : [],
//     columnDefs: [ {
//         'targets': [0], 
//         'orderable': false,
//     }],
//     "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
// 		"iDisplayLength": 25,
//     "searching" : true,
//     "ajax" : {
//      url:"uklistingsfetch.php",
//      type:"POST",
//      data:{
//       ProductType:ProductType, subcategory:subcategory
//      }
//     }
//    });
//   }
  
//   $('#filter').click(function(){
//    var ProductType = $('#ProductType').val();
//    var subcategory = $('#subcategory').val();
//    if(ProductType != '' && subcategory != '')
//    {
//     $('#example1').DataTable().destroy();
//     fill_datatable(ProductType, subcategory);
//    }
//    else
//    {
//     alert('Select Both filter option');
//     $('#example1').DataTable().destroy();
//     fill_datatable();
//    }
//    $('#filtermodal-default').modal('hide');
//   });

//   var $optgroups = $('#subcategory > optgroup');
// 		$("#ProductType").on("change",function(){
// 		var selectedVal = this.value;
// 		$('#subcategory').html($optgroups.filter('[label="'+selectedVal+'"]'));
// 		});

//     var $optgroups1 = $('#subcat > optgroup');
//     $(document).on('change', '#category', function (){
// 		var newselectedVal1 = this.value;
// 		$('#subcat').html($optgroups.filter('[label="'+newselectedVal1+'"]'));
// 		});

//     var $optgroups2 = $('#csvsubcategory > optgroup');
//     $("#csvProductType").on("change",function(){
//     var selectedVal = this.value;
//     $('#csvsubcategory').html($optgroups.filter('[label="'+selectedVal+'"]'));
//     });

//     $('#example1 tbody').on( 'click', 'tr', function () {
//         if ( $(this).hasClass('selected') ) {
//             $(this).removeClass('selected');
//         }
//         else {
//             table.$('tr.selected').removeClass('selected');
//             $(this).addClass('selected');
//         }
//     } );

//     $('#button').click( function () {
//         table.row('.selected').remove().draw( false );
//     } );

//     $('#example-select-all').on('click', function() {
//       if ($(this).hasClass('allChecked')) {
//          $('input[type="checkbox"]', '#example1').prop('checked', false);
//       } else {
//        $('input[type="checkbox"]', '#example1').prop('checked', true);
//        }
//        $(this).toggleClass('allChecked');
//      })

  
//  });




// function exportcsvtemplate() {
//   var x = document.forms["frmProducts"]["exporttype"].value;
//   if (x == "export") {
//     alert("Please Select the right template");
//     return false;
//   }
// if(confirm("Are you sure want to export these csv rows")) {
// document.frmProducts.action = "../exportcsvtemplate.php";
// document.frmProducts.submit();
// }
// }



// // View product start

// $(document).on('click', '.btnView', function(){
   
//    var viewID = $(this).data('id');

//    // AJAX request
//    $.ajax({
//     url: 'ajaxproducts.php',
//     type: 'post',
//     data: {viewid: viewID},
//     success: function(response){ 
      
//       // Add response in Modal body
//       $('.viewbody').html(response);

//       var ctx = document.getElementById("chart").getContext('2d');

//       var dataset1 = (document.getElementById('data1').value).split(',');

//       var dataset2 = (document.getElementById('data2').value).split(',');


//                 var myChart = new Chart(ctx, {
//                 type: 'line',
//                 data: {
//                     labels: dataset1,
//                     datasets: 
//                     [{
//                         label: 'Sales',
//                         data: dataset2,
//                         backgroundColor: 'transparent',
//                         borderColor:'rgba(0,255,255)',
//                         borderWidth: 3
//                     }]
//                 },

//                 options: {
//                     scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
//                     tooltips:{mode: 'index'},
//                     legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
//                 }
//             });
            

//       // Display Modal
//       $('#viewModal').modal('show'); 

//       $('.input-images-1').imageUploader();

//     }
//   });
//  });
//  //View product end


//  function validateForm() {
//   if ((document.forms["importform"]["csvProductType"].value == "")||(document.forms["importform"]["csvsubcategory"].value == "")||(document.forms["importform"]["csvprtype"].value == "")||(document.forms["importform"]["csvtype"].value == "")) {
//     alert("Please add all necessary details");
//     return false;
//   }
//   confirm("Please make sure you dont change the downloaded format of CSV file \nOtherwise data will be updated in wrong columns."); 
// } 
 

 </script> 
