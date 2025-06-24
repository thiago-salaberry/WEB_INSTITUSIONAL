
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
<?php
$conn = new mysqli("db", "web", "web", "web");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

session_start();

$error_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin_user WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($row["password"]) && $row["password"] == $password && isset($username) && $row["user_name"] == $username) {
        $_SESSION['usuario'] = $row;
        header("Location: admin.php");
        $_SESSION['status'] = "logued";
        exit();
    } else {
        $error_message = "Nombre de usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>

<form method="post" action="">
    <div class="form-element">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
    </div>
    
    <div class="form-element">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>
    
    <button type="submit" name="login">Iniciar sesión</button>

    <?php if ($error_message): ?>
        <div class="alert">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
</form>
</body>
</html>


