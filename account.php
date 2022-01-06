<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/datgiaohang.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
<?php
ob_start();
session_start();
?>
<?php
$tk = "";
$mk = "";
$kq = "";
if (isset($_POST['submit'])) {
	require './inc/config.php';
	$tk = $_POST['txtus'];
	$mk = $_POST['txtem'];
	$sql = "SELECT * FROM loginuser  where email = '$tk'  and matkhau = '$mk'  ";
	$result = $conn->query($sql);
	// echo  $mk;
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$_SESSION['txtus'] = $tk;
			$_SESSION['HoTen'] = $row["HoTen"];
			$_SESSION['email'] = $row["email"];
			$_SESSION['dienthoai'] = $row["DienThoai"];
			// header('Location: cart.php');
			$row = $result->fetch_assoc();
		}
	} else {
		$kq = "Thông tin không đúng vui lòng kiềm tra lại";
	}
}
?>
<?php
$name = "";
$email = "";
$dt = "";
$mk = "";
$kqdk = "";
$repass = "";

if (isset($_POST['dangky'])) {
	require './inc/config.php';
	$name  = $_POST['fullname'];
	$email = $_POST['email'];
	$dt = $_POST['phone'];
	$mk = $_POST['password'];
	$repass = $_POST['repass'];
	if ($repass != $mk) {
		$kqdk = "Mật khẩu nhập lại không chính xác";
	} else {
		$sql = "INSERT INTO  loginuser (email,matkhau,hoten,DienThoai) 
        VALUES ('$email','$mk' ,'$name','$dt') ";
		// echo  $mk;
		if (mysqli_query($conn, $sql)) {
			$name = "";
			$email = "";
			$dt = "";
			$mk = "";
			$repass = "";
			$kqdk = "Đăng ký thành công";
		} else {
			$kqdk = "Đăng ký không thành công xin hay kiểm tra lại thông tin";
		}
	}


	mysqli_close($conn);
}
?>
    <div class="main" style="background-color: #525e6c">
        <section class="signup">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form" style="padding-top:60px">
                        <h2 class="form-title">Log In</h2>
                        <form name="form1" id="ff1" method="POST" action="#">
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-account material-icons-name"
                                        style="margin-left:10px"></i></label>
                                <input type="email" class="form-control" placeholder="Email" name="txtus" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left:10px"></i></label>
                                <input type="password" class="form-control" placeholder="Password" name="txtem" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remmeber
                                    Me?</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="login" class="form-submit" value="Log in"
                                    style="font-size:1rem">
                            </div>
                            <P style="color:red"><?php echo $kq; ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sign up Form -->
        <section class="sign-up">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form name="form2" id="ff2" method="post" action="#">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"
                                        style="margin-left:10px"></i></label>
                                <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                                    id="firstname" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email" style="margin-left:10px"></i></label>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                                    value="<?php echo $email; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><i class="zmdi zmdi-mobile" style="margin-left:10px"></i></label>
                                <input type="number" class="form-control" placeholder="Mobile" name="phone" id="phone"
                                    value="<?php echo $dt; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left:10px"></i></label>
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    id="password" value="<?php echo $mk; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"
                                        style="margin-left:10px"></i></label>
                                <input type="password" class="form-control" placeholder="Repeat Your Password"
                                    name="repass" id="repass" value="<?php echo $repass; ?>" required>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="dangky" class="form-submit" value="Register"
                                    style="font-size:1rem">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>