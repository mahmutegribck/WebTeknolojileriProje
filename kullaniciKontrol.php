<?php
ob_start();
$email = 'b211210384@ogr.sakarya.edu.tr';
$password = 'b211210384';

if (isset($_POST['email'])) {
    $emailControl = $_POST['email'];
    $passwordControl = $_POST['password'];

    if ($emailControl == $email && $passwordControl == $password) {

        echo " <script type='text/javascript'>
       alert('Girş İşlemi Başarılı, Hoşgeldiniz $password');
       </script>";
        header("Refresh:0.1; url=hakkimda.html");
        exit();
    } else {
        echo " <script type='text/javascript'>
       alert('Giriş İşlemi Başarısız, Lütfen Tekrar Deneyiniz');
       </script>";
       header("Refresh:0.1; url=index.html");
        exit();
    }
}
