<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Đăng nhập</h2>
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        }
        if (isset($_GET['success'])) {
            echo $_GET['success'];
        }
        ?>
        <form action="process_signin.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" required id="pwd" placeholder="Enter password"
                    name="password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            <a href="signup.php">Đăng ký</a>
            <a href="../index.php">Về trang chủ</a>
        </form>
    </div>

</body>

</html>