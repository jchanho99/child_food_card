<?php
    $server = "localhost:8000";
    $user = "root";
    $password = "";
    $dbname = "myCFC";

    $conn = new mysqli($server, $user, $password, $dbname);

    if($conn->connect_error) echo "<h2>접속에 실패하였습니다.</h2>";
?>