<?php
include "../../short.php";
include('log.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Administrator Panel</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo $url; ?>/static/images/mri.png" />
</head>

<body>
    <div id="main">
        <a href="<?php echo $url; ?>/index.php"><span class=""><img
                    src="<?php echo $url; ?>/static/images/NY_Imaging_Specialists.png" style="max-width:250px;"
                    alt="<?php echo $name; ?>  Logo" /></span></a><br>
        <hr>
        <div id="login">
            <h2>Staff Login</h2>
            <form action="" method="post">
                <label>UserName :</label>
                <input id="name" name="username" placeholder="username" type="text">
                <label>Password :</label>
                <input id="password" name="password" placeholder="**********" type="password">
                <input name="submit" type="submit" value=" Login ">
                <span><?php echo $error; ?></span>
            </form>
        </div>
        <a href="<?php echo $url; ?>">Go back to site</a>
    </div>
</body> <?php echo $tawk ?>

</html>