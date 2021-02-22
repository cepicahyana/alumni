<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Register </title>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <link href="<?php echo base_url() ?>assets/css/register/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/js/register/sb-admin-2.js">
</head>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">

            <!-- Bootstrap -->

            <link href="<?php echo base_url() ?>assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
            <!-- Navbar Brand -->
            <!-- <a href="#" class="navbar-brand">
                <img src="<?php echo base_url() ?>assets/img/logosma1kendari.png" alt="logo" width="400">
            </a>
        </div>
    </nav> -->
</header>

<body>
    <div class="container">
        <div class="row py-5 mt-0 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="<?php echo base_url() ?>assets/images/register/reg.PNG" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Buat Akun Anda </h1>

            </div>


            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form id="formSubmit" action="javascript:submitForm('formSubmit')" method="post" url="<?php echo base_url() ?>register/insert">

                    <div id="hasilvalid" class="input-group col-lg-12 mb-4"></div>

                    <div class="row">



                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="NamaDepan" type="text" name="f[nama_depan]" placeholder="Nama Depan" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="NamaBelakang" type="text" name="f[nama_belakang]" placeholder="Nama Belakang" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Username -->
                        <!-- <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                            </div>
                            <input id="NamaPengguna" type="username" name="f[username]" placeholder="Nama Pengguna" class="form-control bg-white border-left-0 border-md">
                        </div> -->


                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="f[email]" placeholder="Alamat Email" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-phone"></i>

                                </span>
                            </div>
                            <input type="text" id="62" readonly class="form-control bg-white border-md border-left-0 pl-3" style="max-height: 50px;max-width: 80px " id="staticEmail" value="+62">
                            <input id="NoTlp" type="tel" name="f[hp]" placeholder="Nomor Telepon" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>

                        <!-- Gender -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-venus-mars"></i>
                                </span>
                            </div>
                            <select name="f[jk]" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Jenis Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <!-- graduated -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                            </div>
                            <input type="text" id="1993" value="1993" readonly class="form-control bg-white border-md border-left-0 pl-3" style="max-height: 50px;max-width: 500px " id="staticEmail" placeholder="1993">
                            <input type="hidden" name="f[id_tahun]" value="1">
                        </div>


                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Katasandi" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="confirm_password" type="password" name="confirm_password" placeholder="Konfirmasi Katasandi" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-2">
                            <a href="#" onclick="javascript:submitForm('formSubmit')" id="btn-grad" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold" class="">Daftar</span>

                            </a>
                        </div>
                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Sudah Punya Akun? <a href="<?php echo base_url() ?>" class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- js -->


</body>

</html>


<script>
    function submitForm(id) {
        $("#hasilvalid").html('');
        console.log("ini", id)
        var form = $("#" + id);
        var link = $(form).attr("url");

        $.ajax({
            url: link,
            data: $(form).serialize(),
            type: "POST",
            dataType: "JSON",

            success: function(data) {
                if (data["gagal"] == true) {

                    alert(data["info"]);
                    window.location.href = "<?php echo base_url() ?>register"
                } else if (data == true) {
                    window.location.href = "<?php echo base_url() ?>login"
                    console.log("sukses")
                } else {

                    $("#hasilvalid").html('<div class="alert alert-danger" style="line-height:1px" role="alert">' + data + '</div>');
                }

            }
        });
    };
</script>