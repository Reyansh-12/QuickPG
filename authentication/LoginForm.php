<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginForm.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="loginForm m-0 p-0">
        <div class="content">
            <div class="d-flex justify-content-center align-items-center" style="width:1291px; height: 100vh;">
                <div class="col-6 d-flex justify-content-center align-items-center " style="width: 527px;">
                    <h2>Find Your Perfect Home in nagpur</h2>
                </div>
                <div class="col-6 d-flex justify-content-center" style="width: 527px;">
                    <form action="Login.php" method="POST" class="p-5 rounded" style="width: 100%; max-width: 400px;">
                        <h1 class="text-center">Login</h1>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>