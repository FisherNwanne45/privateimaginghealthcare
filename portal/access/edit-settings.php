<?php
include('adminsession.php');
?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site Settings</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome : <i><?php echo $login_session; ?> </a>
                     
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
                                <li><a href="identity.php"><i class="menu-icon icon-bullhorn"></i>Create New Tracking </a>
                                </li>
                                <li><a href="edit-settings.php?id=36"><i class="menu-icon icon-cog"></i>Site Setting </a>
                                </li>
                                <li><a href="change_password.php"><i class="menu-icon icon-inbox"></i>Change Password  </a></li>
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
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE site set phone='" . $_POST['phone'] . "',email='" . $_POST['email'] . "',name='" . $_POST['name'] . "',addr='" . $_POST['addr'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";

header("Location: ");
}
$result = mysqli_query($conn,"SELECT * FROM site WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


						<div class="module">
							<div class="module-head">
								<h3>Site Settings</h3>
							</div>
							<div class="module-body">

								 

									<form class="form-horizontal row-fluid" name="frmUser" method="post" action="">
									 
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Current Site Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?php echo $row['name']; ?>" class="span8" disabled>
											</div>
										</div>

										 <div class="control-group">
											<label class="control-label" for="basicinput">Current Site Address</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?php echo $row['addr']; ?>" class="span8" disabled>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Current Site Phone</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?php echo $row['phone']; ?>" class="span8" disabled>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Current Site Email</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?php echo $row['email']; ?>" class="span8" disabled>
											</div>
										</div><br><h2>Modify Site Info</h2><hr>

										<div class="control-group">
											<label class="control-label" for="basicinput">Change Site Name</label>
											<div class="controls">
												 
												 <input class="span8" type="text"  name="name"  value="<?php echo $row['name']; ?>">       
											 
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Change Site Address</label>
											<div class="controls">
											 
													<input type="text" placeholder="Enter New Address" class="span8" type="text" name="addr"   value="<?php echo $row['addr']; ?>"> 
											 
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Change Site Phone</label>
											<div class="controls">
											 
													<input type="text" placeholder="Enter New Address" class="span8" type="text" name="phone"   value="<?php echo $row['phone']; ?>"> 
											 
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Change Site Email</label>
											<div class="controls">
											 
													<input type="text" placeholder="Enter New Address" class="span8" type="text" name="email"   value="<?php echo $row['email']; ?>"> 
											 
											</div>
										</div>

									 
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" value="Submit" class="btn btn-success">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2020 Fisher Designs </b>All rights reserved.
            </div>
        </div>
        <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="edmin/scripts/common.js" type="text/javascript"></script>
      
    </body> <?php echo $tawk ?>
 