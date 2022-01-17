<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background: transparent;">
        <div class="header container-fluid mt-1">
            <img src="img/foody-corp.png" alt="" height="40px">

        </div>
    </nav>
    <main class="pb-5">
        <div class="container d-flex justify-content-center">
            <div style="width:484px" class="p-5 border rounded" >
            <div class="row">
                        <div class="col-md ">
                            <div id="first">
                                <div class="myform form">
                                    <form class="form-signin" width="100" action="process_signup.php" method="post">
                                        <div class="text-center">
                                        
                                            <h5 class="fw-bold h3 mb-3 mt-0 font-weight-normal">
                                            Đăng kí
                                        </h5>
                                             <a class="text-decoration-none"
                                                href="login.php">Đăng nhập</a>
                                        </div>
                                        
                                        <label for="inputEmail" class="sr-only">Email
                                        </label>
                                        <input type="email" id="inputEmail" class="form-control" name="txtEmail"
                                            required autofocus>
                                        <label for="inputPassword" class="sr-only">Mật khẩu</label>
                                        <input type="password" id="inputPassword" class="form-control" name="txtPass"
                                            required>
                                        <label for="inputRetypePassword" class="sr-only">Nhập lại mật khẩu</label>
                                        <input type="password" id="inputRetypePassword" name="txtPass2"
                                            class="form-control" placeholder="" required>
                                        <div class="checkbox mb-3">

                                            <?php
                                            if(isset($_GET['error'])){
                                                echo "<h5 style ='color:red'>{$_GET['error']}</h5>";
                                            }
                                            ?>
                                        </div>
                                        <button class="col-md-12 btn btn-lg btn-danger btn-block" type="submit" name="btnSignUp" >Đăng kí</button>
                                        <div class=" justify-content p-4 pt-0">
                                            <div class="col-sm mt-5"><button type="button"
                                                    class="col-md-12 btn btn-icon  border p-2"><span><img
                                                            src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1"
                                                            width="25"></span>
                                                    Đăng nhập bằng Facebook</button>
                                            </div>
                                            <div class="col-sm mt-3"><button type="button"
                                                    class="col-md-12 btn btn-icon  border p-2"><span><img
                                                            src="https://img.icons8.com/color/48/000000/google-logo.png"
                                                            class="img-fluid mr-1" width="25"></span>
                                                    Đăng nhập bằng Google</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </div>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>v