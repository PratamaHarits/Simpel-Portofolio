<?php

session_start();

include '../tools/connection.php';

// LOGIN ADMIN

if (isset($_SESSION["login_admin"])) {
    header("location: ../admin/admin.php");
    exit();
}

if (isset($_POST['login_admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM ta_admin WHERE admin_nama = '$username'");

    //cek username
    if (mysqli_num_rows($query) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($query);
        if ($password === $row["admin_password"]) {

            // set session
            $_SESSION["login_admin"] = true;

            header("location: ../admin/admin.php");
            exit();
        }
    }
    $error = true;
}

?>

<?php include '../blade/header.php' ?>


<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <p class="text-center fw-bold">Login Form</p>
            <form action="" method="post">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username atau Password salah !</p>
                <?php endif; ?>
                <div class="row mb-3">
                    <label for="username" class="col-sm-4 col-form-label" style="color: lightcyan;">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="username" autocomplete="off" autofocus required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-4 col-form-label" style="color: lightcyan;">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="d-grid gap-3">
                    <button type="submit" class="btn btn-outline-success" name="login_admin">Login</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>