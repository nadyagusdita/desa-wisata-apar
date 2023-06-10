<?php
include 'admin/_config.php';
session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);
        if (password_verify($password, $data["password"])) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            header("Location: admin/");
            exit;
        }
    }
    $erorr = true;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/img/pariaman.png" type="image/x-icon">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap");

        .content-4-1 .btn:focus,
        .content-4-1 .btn:active {
            outline: none !important;
        }

        .content-4-1 .width-left {
            width: 0%;
        }

        .content-4-1 .width-right {
            padding: 8rem 2rem;
            background-color: #fcfdff;
        }

        .content-4-1 .right {
            width: 100%;
        }

        .content-4-1 .title-text {
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 0.75rem;
        }

        .content-4-1 .caption-text {
            font: 400 0.875rem/1.75rem Poppins, sans-serif;
            color: #a8adb7;
        }

        .content-4-1 .input-label {
            font: 500 1.125rem/1.75rem Poppins, sans-serif;
            color: #39465b;
        }

        .content-4-1 .div-input {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.25rem;
            margin-top: 0.75rem;
            border-radius: 0.75rem;
            border: 1px solid #cacbce;
            color: #2a3240;
            transition: 0.3s;
        }

        .content-4-1 .div-input:focus-within {
            border: 1px solid #2ec49c;
            color: #2a3240;
            transition: 0.3s;
        }

        .content-4-1 .div-input input::placeholder {
            color: #cacbce;
            transition: 0.3s;
        }

        .content-4-1 .div-input:focus-within input::placeholder {
            color: #2a3240;
            outline: none;
            transition: 0.3s;
        }

        .content-4-1 .div-input .icon-toggle-empty-4-1 i,
        .content-4-1 .div-input:focus-within .icon i {
            transition: 0.3;
            fill: #2ec49c;
            transition: 0.3s;
            color: #cacbce;
        }

        .content-4-1 .input-field {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            width: 100%;
            background-color: #fff;
            transition: 0.3s;
        }

        .content-4-1 .input-field:focus {
            outline: none;
            transition: 0.3s;
        }

        .content-4-1 .forgot-password {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #cacbce;
            transition: 0.3s;
            text-decoration: none;
        }

        .content-4-1 .forgot-password:hover {
            color: #2a3240;
        }

        .content-4-1 .btn-fill {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            background-image: linear-gradient(rgba(91, 203, 173, 1),
                    rgba(39, 194, 153, 1));
            padding: 0.75rem 1rem;
            margin-top: 2.25rem;
            border-radius: 0.75rem;
            transition: 0.5s;
        }

        .content-4-1 .btn-fill:hover {
            background-image: linear-gradient(#2ec49c, #2ec49c);
            transition: 0.5s;
        }

        .content-4-1 .bottom-caption {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            margin-top: 2rem;
            color: #2a3240;
        }

        .content-4-1 .green-bottom-caption {
            color: #2ec49c;
            font-weight: 500;
        }

        .content-4-1 .green-bottom-caption:hover {
            color: #2ec49c;
            cursor: pointer;
            text-decoration: underline;
        }

        @media (min-width: 576px) {
            .content-4-1 .width-right {
                padding: 8rem 4rem;
            }

            .content-4-1 .right {
                width: 58.333333%;
            }
        }

        @media (min-width: 768px) {
            .content-4-1 .right {
                width: 66.666667%;
            }
        }

        @media (min-width: 992px) {
            .content-4-1 .width-left {
                width: 48%;
            }

            .content-4-1 .width-right {
                width: 52%;
            }

            .content-4-1 .right {
                width: 75%;
            }
        }

        @media (min-width: 1200px) {
            .content-4-1 .right {
                width: 58.333333%;
            }
        }
    </style>
    <title>Masuk</title>
</head>

<body>
    <section style="box-sizing: border-box; background-color: #f5f5f5">
        <div class="content-4-1 align-items-center h-100 " style="font-family: 'Poppins', sans-serif">
            <div class="d-flex mx-auto align-items-center justify-content-center mx-lg-0" style=" background-color: #fcfdff; padding: 2rem 2rem;">

                <div class="card" style="padding: 75px;">

                    <?php if (isset($erorr)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Username / Password salah!
                        </div>
                    <?php } ?>

                    <div class="mx-lg-0 mx-auto" style="background-color: #fff;">
                        <img src="assets/img/pariaman.png" alt="" width="70" class="d-inline-block align-text-middle float-start me-3">

                        <h3 class="title-text float-end mb-0">Masuk Ke Halaman Admin</h3>
                        <p class="caption-text">
                            Mohon masuk dengan akun yang
                            sudah terdaftar
                        </p>
                        <form style="margin-top: 3rem" action="" method="post">
                            <div style="margin-bottom: 1.75rem">
                                <label for="" class="d-block input-label">Username</label>
                                <div class="d-flex w-100 div-input">
                                    <div class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24">
                                        <i class="bi bi-envelope-fill" style="color: #cacbce"></i>
                                    </div>
                                    <input class="input-field border-0" type="text" name="username" placeholder="Username anda" autocomplete="off" required />
                                </div>
                            </div>
                            <div style="margin-top: 1rem">
                                <label for="" class="d-block input-label">Password</label>
                                <div class="d-flex w-100 div-input">
                                    <div class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24">
                                        <i class="bi bi-lock-fill" style="color: #cacbce"></i>
                                    </div>
                                    <input class="input-field border-0" type="password" name="password" id="password-content-4-1" placeholder="Password anda" required />
                                    <div onclick="togglePassword()">
                                        <div style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14">
                                            <i class="bi bi-eye-fill" style="color: #cacbce"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
                            </div>
                            <button class="btn btn-fill text-white d-block w-100" type="submit" name="login">
                                Masuk ke Akun
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        function togglePassword() {
            var x = document.getElementById("password-content-4-1");
            if (x.type === "password") {
                x.type = "text";
                document
                    .getElementById("icon-toggle")
                    .setAttribute("fill", "#2ec49c");
            } else {
                x.type = "password";
                document
                    .getElementById("icon-toggle")
                    .setAttribute("fill", "#CACBCE");
            }
        }
    </script>
</body>

</html>