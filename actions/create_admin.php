<?php

    include '../config.php';
    $db = new Dbh();
    $conn = $db->connect();
    $error = "";

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: ../admin.php");
        } else {
            $error = "Gagal menambah user";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dompet Digital</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/actions.css">
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div id="container">
        <h1>Tambah Admin</h1>
        <form id="login" action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
        </form>
        <button form="login" name="submit">Kirim</button>
    </div>

</body>
</html>