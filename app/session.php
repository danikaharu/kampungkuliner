<?php

if (isset($_SESSION['username'])) {
    $result = mysqli_query($mysqli, "SELECT * FROM token WHERE email='".$_SESSION['unique_user']."'");
    $num_row = mysqli_num_rows($result);

    if ($num_row > 0) {
        $row = mysqli_fetch_assoc($result);
        $token = $row['token'];

        if ($_SESSION['token'] != $token) {
            $_SESSION = [];
            session_destroy();
            session_unset();
            header('Location: ../');
        }
    }
}