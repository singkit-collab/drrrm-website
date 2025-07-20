<!-- backend with firebase -->
<?php
session_start();
include '../controller/Connection.php'; // Your FirebaseDB class here

$firebase = new Connection();
$error = "";

// ✅ Connection check block
$checkConnection = $firebase->read("users");


if (!$checkConnection) {
    echo "<div style='color: red; text-align:center;'>⚠️ Failed to connect to Firebase or no data found.</div>";
} else {
    echo "<div style='color: green; text-align:center;'>✅ Firebase connected successfully.</div>";
}

$users = $firebase->read("users");

echo "<h3>Debug Raw Firebase Data:</h3>";
echo "<pre>";
var_dump($users);
echo "</pre>";




if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

$raw_users = $firebase->read("users");

// Decode if it's a string
if (is_string($raw_users)) {
    $users = json_decode($raw_users, true);
} else {
    $users = $raw_users;
}

// Now check if it's an array before looping
if (is_array($users)) {
    foreach ($users as $user) {
        if (
            isset($user['email']) &&
            isset($user['password']) &&
            $user['email'] === $email &&
            password_verify($password, $user['password'])
        ) {
            // Login success
            $_SESSION['user'] = [
                "id" => $user['id'],
                "first_name" => $user['first_name'],
                "last_name" => $user['last_name'],
                "email" => $user['email'],
                "role" => $user['role']
            ];
            header("Location: ../admin/dashboard.php");
            exit();
        }
    }
    $error = "Invalid email or password.";
} else {
    $error = "⚠️ Users data is not an array. Check Firebase structure.";
}

}
?>


<?php include "../layouts/header.php" ?>
<div class="login-page bg-body-secondary">


    <div class="login-box">
        <div class="login-logo">
            <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                <!-- /.social-auth-links -->
                <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
                <p class="mb-0">
                    <a href="register.php" class="text-center"> Register a new membership </a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>