<!DOCTYPE html>
<html>
<head>
 <title>Form Login</title>
 <link href="../include/css/bootstrap.min.css" rel="stylesheet">
 <style>
        body {
            background-color:#eee;
        }
        .row {
            margin:100px auto;
            width:300px;
            text-align:center;
        }
        .login {
            background-color: #fff;
            padding:20px;
            margin-top:20px;
            border: 3px solid blue;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>LOGIN ADMIN ScoreApps</h2>
            <div class="login">

<?php
include '../include/koneksi.php';
 

if(isset($_POST['simpan'])){
 
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 $sql="SELECT * FROM user WHERE username='$user'and password='$pass'";
    $result=mysqli_query($koneksi, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        //session_start();
        //$_SESSION["nama"]=$row['username'];
        //$_SESSION["pass"]=$row['password'];
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>
<form role="form" action="" method="post">

<div class="form-group">
    <label>Username : </label>
    <input type="text" name="user" maxlength="10" class="form-control" placeholder="Username" style="border: 2px solid blue; border-radius: 5px; "><br><br>
</div>
<div class="form-group">
    <label>Password : </label>
    <input type="password" name="pass" maxlength="10" class="form-control" placeholder="Password" style="border: 2px solid blue; border-radius: 5px; "><br>
</div>
    <div class="form-group">
    <input type="submit" name="simpan" value="Login" class="form-control" style="background-color: blue; border-radius: 5px; color: #fff;">
 </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
    


    
