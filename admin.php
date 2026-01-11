<?php
$admin_user = "vishnu";
$admin_pass = "080709";

if (isset($_POST['login'])) {

    if ($_POST['user'] === $admin_user &&
        $_POST['pass'] === $admin_pass) {

        echo "<h2>Saved Data</h2>";
        echo "<pre>";

        if (file_exists("data.txt")) {
            echo htmlspecialchars(file_get_contents("data.txt"));
        } else {
            echo "No data found";
        }

        echo "</pre>";
        exit;
    } else {
        echo "Wrong admin login";
    }
}
?>

<form method="POST">
  <input type="text" name="user" placeholder="Admin Username" required>
  <input type="password" name="pass" placeholder="Admin Password" required>
  <button name="login">Login</button>
</form>