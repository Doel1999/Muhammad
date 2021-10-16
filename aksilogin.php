<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
    echo "<script>alert('Username Belum Diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
else if (empty($password)){
    echo "<script>alert('Password Belum Diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
else{
    session_start();
    include "koneksi.php";
    $login = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE (username = '$_POST[username]') AND (password = '$_POST[password]')");
    //$login = mysql_query ("SELECT * from tbl_login where (username ='$_POST[username]') and (password='$_POST[password]')");
    $rowcount=mysqli_num_rows($login);
    if($rowcount==1)
    {
        $_SESSION['username'] = $_POST['username'];
        header("location:dashboard.php");
    }else{
    echo "<script>alert('Username atau Password Salah !!!')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.html'>";
}
}
?>
]