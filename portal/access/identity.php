<?php
include('adminsession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Patient</title>
  <link href="../../templates/equinox/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link type="text/css" href="edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="edmin/css/theme.css" rel="stylesheet">
  <link type="text/css" href="edmin/images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
    rel='stylesheet'>
</head>

<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome :
          <i><?php echo $login_session; ?> </a>

        <!-- /.nav-collapse -->
      </div>
    </div>
    <!-- /navbar-inner -->
  </div>
  <!-- /navbar -->
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="span3">
          <div class="sidebar">
            <ul class="widget widget-menu unstyled">
              <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                </a></li>
              <li><a href="identity.php"><i class="menu-icon icon-bullhorn"></i>Create New Patient
                </a>
              </li>

              <li><a href="change_password.php"><i class="menu-icon icon-inbox"></i>Change Password
                </a></li>
              <li><a href="logout.php"><i class="menu-icon icon-tasks"></i>Logout </a></li>
            </ul>
            <!--/.widget-nav-->



          </div>
          <!--/.sidebar-->
        </div>
        <!--/.span3-->
        <div class="span9">
          <div class="content">
            <?php
            require_once('config.php');

            if (isset($_POST['save'])) {
              $target_dir = "img/";
              $filename = explode('.', $_FILES['image']['name']);
              $ext = $filename[1];
              $imgname = time() . '.' . $ext;
              $target_file = $target_dir . $imgname;
              $cid = $_POST['cid'];
              $name = $_POST['name'];
              $rank = $_POST['rank'];
              $phone = $_POST['phone'];
              $type = $_POST['type'];
              $amt = $_POST['amt'];
              $rate = $_POST['rate'];
              $dur = $_POST['dur'];
              $coldate = $_POST['coldate'];
              $paydate = $_POST['paydate'];
              $status = $_POST['status'];
              $remark = $_POST['remark'];
              $message = "Dear $name,  

Your Tax Patient Application for  $status has been Received, you will start receiving mails from us to keep you updated.

Tracking Number - $cid.
Current Status:   $dur 
Nurse Name:  $status 
Hospital Ward Number: $amt 
Hospital Room Number: $rate 
Total On Going Cost:  $paydate



Endeavour to contact us in case of any complaints or further inquiries. 

Thanks.
NYC Tax Patient.  ";
              $sub = " $name, Your Tax Patient Information";
              $header = "From: NYC Tax Patient <info@nyctx.com> \r\n";

              $sql_u = "SELECT * FROM user WHERE cid='$cid'";

              $res_u = mysqli_query($conn, $sql_u);
              $uploadOk = 1;
              $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
              // Check if image file is a actual image or fake image
              $check = getimagesize($_FILES["image"]["tmp_name"]);
              if ($check !== false) {
                $text = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                $text = "File is not an image.";
                $uploadOk = 0;
              }
              // Check if file already exists
              if (file_exists($target_file)) {
                $text = "Sorry, file already exists.";
                $uploadOk = 0;
              }
              // Check file size
              if ($_FILES["image"]["size"] > 2000000) {
                $text = "Sorry, your file is too large.";
                $uploadOk = 0;
              }
              // Allow certain file formats
              if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" && $imageFileType != "bmp"
              ) {
                echo "Sorry, only JPG, JPEG, PNG, GIF & BMP files are allowed.";
                $uploadOk = 0;
              }

              if (mysqli_num_rows($res_u) > 0) {
                echo '<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Tracking number already taken! 
									</div>';
                $uploadOk = 0;
              }
              // Check if $uploadOk is set to 0 by an error
              if ($uploadOk == 0) {
                $_SESSION["error"] = $text;

                exit();

                // if everything is ok, try to upload file
              } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                  $path = $imgname;
                  $conn->query("INSERT INTO user (image, cid, name, rank, phone, type, amt, rate, dur, coldate, paydate, status, remark)VALUES ('$path','$cid','$name','$rank','$phone','$type','$amt','$rate','$dur','$coldate','$paydate','$status','$remark')");
                  $_SESSION['"Success"'] = 'Upload Success...';
                  echo '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong>Tracking number successfully created!
									</div>';
                  //	mail($rank,$sub,$message,$header);
                  exit();
                } else {
                  $_SESSION["error"] = $text;

                  exit();
                }
              }
            }
            ?>

            <div class="module">
              <div class="module-head">
                <h3>Create New Patient</h3>
              </div>
              <div class="module-body">

                <?php if (isset($_SESSION['err'])) { ?>
                  <h2><?php echo $_SESSION['err']; ?></h2>
                <?php session_unset();
                } ?>
                <form class="form-horizontal row-fluid" method="post" action="identity.php"
                  enctype="multipart/form-data">





                  <div class="control-group">
                    <label class="control-label" for="basicinput">Patient ID No.</label>
                    <div class="controls">
                      <input type="text" name="cid" id="cid"
                        placeholder="Enter   Patient ID No." class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Passport</label>
                    <div class="controls">
                      <input type="file" name="image" class="span8">

                    </div>
                  </div>



                  <div class="control-group">
                    <label class="control-label" for="basicinput">Patient Full Name</label>
                    <div class="controls">
                      <input type="text" name="name" id="name"
                        placeholder="Enter Name of Applicant" class="span8">

                    </div>
                  </div>



                  <div class="control-group">
                    <label class="control-label" for="basicinput">Patient Illness:</label>
                    <div class="controls">
                      <input type="text" name="rank" id="rank"
                        placeholder="Enter Patient Illness" class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Patient Treatment</label>
                    <div class="controls">
                      <input type="text" name="phone" id="phone"
                        placeholder="Enter Patient treatments" class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Doctor Name</label>
                    <div class="controls">
                      <input type="text" name="coldate" id="coldate" placeholder="e.g Dr Dre"
                        class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Doctor Email</label>
                    <div class="controls">
                      <input type="text" name="type" id="type"
                        placeholder="Enter the doctor's email" class="span8">

                    </div>
                  </div>

                  <hr>
                  <h5 color="red">Ward Information</h5>
                  <hr>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Nurse Name</label>
                    <div class="controls">
                      <input type="text" name="status" id="status"
                        placeholder="Enter Nurse name" class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Hospital Ward Number</label>
                    <div class="controls">
                      <input type="text" name="amt" id="amt"
                        placeholder="Enter Hospital Ward Number" class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Hospital Room Number</label>
                    <div class="controls">
                      <input type="text" name="rate" id="rate"
                        placeholder="Enter Hospital Room Number  " class="span8">

                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Total On Going Cost</label>
                    <div class="controls">
                      <input type="text" name="paydate" id="paydate" placeholder="e.g $2000"
                        class="span8">

                    </div>
                  </div>







                  <div class="control-group">
                    <label class="control-label" for="basicinput">Doctor's Comments </label>
                    <div class="controls">
                      <textarea type="text" name="dur" id="dur"
                        placeholder="Enter Doctor's Comments ..." class="span8"></textarea>

                    </div>
                  </div>


                  <div class="control-group">
                    <div class="controls">
                      <input name="save" type="submit"
                        onClick="MM_validateForm('name','','R','rank','','R','image','','R','cid','','R','phone','','R','type','','R','amt','','R','rate','','R','dur','','R','coldate','','R','paydate','','R','status','','R','remark','','R',);return document.MM_returnValue"
                        value="Create Patient">
                    </div>
                  </div>
                </form>
              </div>
            </div>



          </div>
          <!--/.content-->
        </div>
        <!--/.span9-->
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.wrapper-->
  <!--/.wrapper-->
  <div class="footer">
    <div class="container">
      <b class="copyright">&copy; 2020 - 2025 Fisher Designs </b>All rights reserved.
    </div>
  </div>

  <script type="text/JavaScript">
    <!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
  </script>

  <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
  <script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="edmin/scripts/common.js" type="text/javascript"></script>

</body>