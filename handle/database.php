<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_clonethmmyvienngocdung";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `uu_dai_sol`( `ho_ten`, `email`, `sdt`, `chi_nhanh`, `dich_vu`, `thoi_gian`) VALUES ('$name','$email','$phone','$branch','$service','$time')";

    if (mysqli_query($conn, $sql)) {
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>