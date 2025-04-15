<?php
include 'config.php';

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy login check (replace with DB check)
    if ($email == "admin@example.com" && $password == "123456") {
        $_SESSION['user'] = $email;
        setcookie("user_email", $email, time() + (86400 * 30), "/"); // 30-day cookie
        header("Location: dashboard.php");
        exit;
    } else {
        $login_error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center mb-3">Login</h3>
        <?php if ($login_error): ?>
            <div class="alert alert-danger"><?= $login_error ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="admin@example.com">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required value="123456">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
