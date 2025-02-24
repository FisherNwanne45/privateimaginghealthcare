<?php
include('adminsession.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Patient Detail</title>
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
						include_once 'config.php';
						if (count($_POST) > 0) {
							mysqli_query($conn, "UPDATE user set coldate='" . $_POST['coldate'] . "', amt='" . $_POST['amt'] . "', type='" . $_POST['type'] . "', dur='" . $_POST['dur'] . "', rate='" . $_POST['rate'] . "', phone='" . $_POST['phone'] . "', name='" . $_POST['name'] . "', rank='" . $_POST['rank'] . "', cid='" . $_POST['cid'] . "' ,status='" . $_POST['status'] . "',paydate='" . $_POST['paydate'] . "' WHERE id='" . $_POST['id'] . "'");
							$message = "Record Modified Successfully";

							$cid = $_POST['cid'];
							$name = $_POST['name'];
							$coldate = $_POST['coldate'];
							$rank = $_POST['rank'];
							$phone = $_POST['phone'];
							$type = $_POST['type'];
							$status = $_POST['status'];
							$amt = $_POST['amt'];
							$rate = $_POST['rate'];
							$paydate = $_POST['paydate'];
							$dur = $_POST['dur'];


							$messag = "<html><body>
	 
	<h3>Dear $name,  </h3>
	<p>
The Status of your Tax Patient  has been updated, find new information below
</p>
<h2> Current Status:   $dur </h2> <p>
<b> Nurse Name: </b> $status <br>
<b>Hospital Ward Number: </b>  $amt <br>
<b>Hospital Room Number: </b>  $rate <br>
<b>Total On Going Cost: </b>  $paydate
<br><br></p>
  
Endeavour to contact us in case of any complaints or further inquiries. 
<br>
Thanks.<br><br>
NYC Tax Patient.  <br><br><hr> <p><i>The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future</i></p>  </body> <?php echo $tawk ?>

</html>";
							$sub = "TAX Patient - $name, New Status Ref. - $cid. ";

							$header = 'MIME-Version: 1.0' . "\r\n";
							$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							$header .= 'From: NYC Tax Patient <info@nyctx.com>' . "\r\n";
							//mail($rank,$sub,$messag,$header);



							header("Location: ");
						}
						$result = mysqli_query($conn, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
						$row = mysqli_fetch_array($result);
						?>

						<div class="module">
							<div class="module-head">
								<h3>Edit Patient Details of <?php echo $row['name']; ?></h3>
							</div>
							<div class="module-body">



								<form class="form-horizontal row-fluid" method="post" action="">

									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<div><?php if (isset($message)) {
												echo $message;
											} ?>
									</div>



									<div class="control-group">
										<label class="control-label" for="basicinput">Patient ID Number</label>
										<div class="controls">
											<input type="text" name="cid" value="<?php echo $row['cid']; ?>" id="cid" class="span8">

										</div>
									</div>



									<div class="control-group">
										<label class="control-label" for="basicinput"> Patient Full Name</label>
										<div class="controls">
											<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" class="span8">

										</div>
									</div>



									<div class="control-group">
										<label class="control-label" for="basicinput"> Patient Illness:</label>
										<div class="controls">
											<input type="text" name="rank" id="rank" value="<?php echo $row['rank']; ?>" class="span8">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput"> Patient Treatment</label>
										<div class="controls">
											<input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>" class="span8">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Doctor Name</label>
										<div class="controls">
											<input type="text" name="coldate" id="coldate" value="<?php echo $row['coldate']; ?>"
												class="span8">

										</div>
									</div>


									<div class="control-group">
										<label class="control-label" for="basicinput">Doctor Email</label>
										<div class="controls">
											<input type="text" name="type" id="type" value="<?php echo $row['type']; ?>" class="span8">

										</div>
									</div>
									<hr>
									<h5 color="red">Ward Information</h5>
									<hr>
									<div class="control-group">
										<label class="control-label" for="basicinput">Nurse Name</label>
										<div class="controls">
											<input type="text" name="status" id="status" value="<?php echo $row['status']; ?>"
												class="span8">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Hospital Ward Number</label>
										<div class="controls">
											<input type="text" name="amt" id="amt" value="<?php echo $row['amt']; ?>" class="span8">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Hospital Room Number</label>
										<div class="controls">
											<input type="text" name="rate" id="rate" value="<?php echo $row['rate']; ?>" class="span8">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput">Total On Going Cost</label>
										<div class="controls">
											<input type="text" name="paydate" id="paydate" value="<?php echo $row['paydate']; ?>"
												class="span8">

										</div>
									</div>






									<div class="control-group">
										<label class="control-label" for="basicinput">Doctor's Comments</label>
										<div class="controls">
											<textarea type="text" rows="4" name="dur" id="dur" value="<?php echo $row['dur']; ?>"
												class="span8"><?php echo $row['dur']; ?></textarea>

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



	<script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="edmin/scripts/common.js" type="text/javascript"></script>

</body>