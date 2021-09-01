<?php
require_once("register.php");
register();
?>
<?php
require_once("login.php");
login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">

                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="" id="my_form_log_in" method="POST">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>

                                                <a href="#" class="btn mt-4" onclick="document.getElementById('my_form_log_in').submit()">submit</a>
                                                <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link" onclick="myFunction()">Forgot your
                                                        password?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="" id="my_form_sign_up" method="GET">
                                                <h4 class="mb-4 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" name="fullname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email1" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password1" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <a href="#" class="btn mt-4" onclick="document.getElementById('my_form_sign_up').submit()">submit</a>
                                                <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            alert("Quên thì nhịn...")
        }
    </script>
</body>
</html>