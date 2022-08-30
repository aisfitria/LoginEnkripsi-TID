<?php
require 'function.php';

if ( isset($_POST["register"])) {
    
    if( registrasi($_POST) > 0 ){
        echo "<script>
                alert('anda berhasil membuat akun!');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>
<center>
<body>

<h2>Silakan Melakukan Registrasi Akun</h2>

<form action="" method="post">
    <label for="username">Username  :</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password  :</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="password2">Konfirmasi Password :</label>
    <input type="password" name="password2" id="password2">
    <br>
    <button type="submit" name="register">Register</button>
    <br>
    <br>
    <a href="login.php">Login Akun</a>

</form>
</body>
</center>
</html>