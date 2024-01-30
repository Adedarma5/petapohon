<?php

    include '../config.php';
    $db = new Dbh();
    $conn = $db->connect();
    $error = "";

    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        $sql = "SELECT * FROM admin WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $username = $row["username"];
        $password = $row["password"];

    } else {
        header("Location: ../admin.php");
    }

    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "UPDATE admin SET username='$username', password='$password' WHERE id=$id";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: ../admin.php");
        } else {
            $error = "Gagal mengupdate user";
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
    <p id="error"><?= $error ?></p>
    <div id="container">
        <h1>Edit Admin</h1>
        <form id="login" action="" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="text" name="username" placeholder="Username" value="<?= $username ?>" required>
            <input type="text" name="password" placeholder="Password" value="<?= $password ?>" required>
        </form>
        <button form="login" name="submit">Edit</button>
    </div>
</body>
</html>