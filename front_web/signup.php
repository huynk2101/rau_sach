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
        <h2>Đăng ký</h2>
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        }
        if (isset($_GET['success'])) {
            echo $_GET['success'];
        }
        ?>
        <form action="process_signup.php" method="post">
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" required id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" required id="pwd" placeholder="Enter password"
                    name="password">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone:</label>
                <input type="phone" class="form-control" required id="phone" placeholder="Enter phone number" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="address">Address:</label>
                <input type="text" class="form-control" required id="address" placeholder="Enter address" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
    </div>

</body>

</html>