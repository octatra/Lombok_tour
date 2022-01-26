<?php
session_start();

require 'Admin/koneksi.php';

if (isset($_GET['login'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password  = '$password'");

    if (mysqli_num_rows($query) === 1) {
        header('location:Admin/index.php');
        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['hak_akses'] = $data->hak_akses;
    }
    //    echo $error = 'Username atau password yang anda masukan salah';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Lombok Tour Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="" style="margin-top:50px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Login Admin</h3>
                    </div>
                    <form id="validate_form" method="GET">
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" name="username" id="email" placeholder="Email" required data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required data-parsley-length="[8, 16]" data-parsley-trigger="keyup" class="form-control" />
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" id="submit" name="login" value="Submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#validate_form').parsley();

        $('#validate_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#validate_form').parsley().isValid()) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('#submit').attr('disabled', 'disabled');
                        $('#submit').val('Submitting...');
                    },
                    success: function(data) {
                        $('#validate_form')[0].reset();
                        $('#validate_form').parsley().reset();
                        $('#submit').attr('disabled', false);
                        $('#submit').val('Submit');
                        alert(data);
                    }
                });
            }
        });
    });
</script>