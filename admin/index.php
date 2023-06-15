<?php
require_once("config.php");
if (isset($_SESSION['user'])) {
echo "<script>window.location='admin.php'</script>";

} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Admin Shako</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <div id="wrapper">
        <div class="container">
           <div align="center" style="margin-top: 210px;">
                <?php
                if(isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($conf, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($conf, $_POST['pass'])));
                    $sql_login = mysqli_query($conf, "SELECT * FROM tb_admin WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($conf));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='admin.php'</script>";


                    } else { ?>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="alert alert-danger alert-dismissable" role ="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <strong>Gagal!</strong> Username Atau Password Salah!

                    </div>
                    </div>
                    </div>
                    <?php
                    }

                }

                ?>
                        <form action="" method="post" class="navbar-form">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="username" required autofocus>
</div>

                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="password" required>
</div>
<div class="input-group">
<input type="submit" name="login" class="btn btn-primary" value="Login">
</div>
</form>

        
</body>

</html>
<?php
}
?>