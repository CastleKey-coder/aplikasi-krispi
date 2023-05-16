<?php

include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>Pemilihan Calon Peserta OSN</title>

        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="assets/images/logo.png" rel="shortcut icon"/>
    </head>

    <body>
        <div class="main">
            <div class="wrapper">
                <div class="content">
                    <div id="particles" class="particles">
                    </div>
                    <div class="box-container">
                        <div class="box-wrapper">
                            <div class="box-wrapper-again">
                                <div class="box-main">
                                    <div class="box-left">
                                        <div class="box-left-content" id="box-left-content">
                                            <div class="box-left-header">
                                                <div class="box-left-logo"><img src="assets/images/logo.png" width="100" align="center"></div>
                                                <div class="box-left-title">
                                                    <span>PERHITUNGAN WP DAN AHP</span><br>
                                                    <span>CALON PESERTA OSN</span>
                                                </div>
                                            </div>
                                            <!--<svg class="box-left-img" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path></g></svg>-->
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <div class="box-right-wrapper">
                                            <div class="box-right-content">
                                                <h2 class="box-right-title">
                                                    Login Form
                                                </h2>
                                                <div class="login">
                                                <form action="" method='POST' class='login-username'>
                                                    <div class="form-label-group">
                                                        <input class="form-control" id="username" placeholder="Username" required="" type="text" name="username" value="<?php echo $username; ?>" required>
                                                        <label for="username">Username</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input class="form-control" id="password" placeholder="Password" required="" type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                                                        <label for="password">Password</label>
                                                    </div>
                                                        <button class="btn" type="submit" id="btnLogin" name="masuk">Masuk</button>
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
</html>