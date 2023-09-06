<?php

if (isset($_POST["submitform"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $branch = $_POST["chi-nhanh"];
    $service = $_POST["dich-vu"];
    $time = implode(", ", $_POST["time"]);
    $admin = "phuonglantonhuynh@gmail.com";

    require './handle/database.php';
        require './handle/sendmail.php';
        
     send_mail($admin, $name, $email,$phone, $branch, $service, $time, 1);
    send_mail($admin, $name, $email,$phone, $branch, $service, $time, 2);

    ini_set('session.gc_maxlifetime', 2);
    ini_set('session.gc_maxlifetime', 2);
    session_start();
    
    $_SESSION['mess']="Đã gửi thông báo vào email, vui lòng kiểm tra lại thông tin.";
    
}

        
?>