<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/pagelogin/fav.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login/style.css">
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part ">
                            <h1 style="color:#276fb7;font-family:Lucida Console;font-weight:800;" id="fontLogin" >Login</h1>
                        </div>

                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto">
                                    <div class="logo-cover">
                                        <img src="<?php echo base_url() ?>assets/images/pagelogin/logosma1kendari.png" alt="">
                                    </div>
                                    <div class="form-cover">
                                        <div id="msg_res"></div>
                                        <form id="formlogin" method="POST" action="javascript:login()">
                                            <h6>Login Here</h6>
                                            <input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                            <div class="row form-footer">
                                                <div class="col-md-6 forget-paswd">
                                                    <p>Belum punya akun?</p>
                                                    <a href="<?php echo base_url() ?>register" style="color:#0000FF">Daftar Disini</a>
                                                </div>

                                                <div class="col-md-6 button-div">
                                                    <button type="submit" style="padding: 10px 28px;" class="btn-primary">Login</button>
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
    </div>

</body>
<script src="<?php echo base_url() ?>assets/js/login/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/login/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/login/bootstrap.min.js"></script>
<script>
    function login() {
        console.log("excute");
        $.ajax({
            url: "<?php echo base_url() ?>auth/cekLogin",
            type: "POST",
            data: $('#formlogin').serialize(),
            dataType: "JSON",
            success: function(data) {

                $('#msg').html("");
                if (data["upass"] == false) {
                    clearconsole();
                    $('#msg_res').html("<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='fas fa-cancel-circle'></i>&nbsp;Username/Password Salah!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    return false;
                }

                if (data["validasi"] == true) {
                    clearconsole();
                    $('#msg_res').html("<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fas fa-cancel-circle'></i>&nbsp;Login Berhasil, Mohon Tunggu...<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    window.location.href = "<?php echo base_url() ?>" + data["direct"];
                } else {
                    window.location.href = "<?php echo base_url() ?>auth/logout";
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Try Again!');
                $('#msg').html("");
                return false;
            }
        });

    }

    function clearconsole() {
        console.log(window.console);
        if (window.console || window.console.firebug) {
            console.clear();
        }

    }
</script>

</html>