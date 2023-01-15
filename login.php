<?php
session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

$username = $password = $err = "";
$users = ["operator", "specialist", "admin", "analyst"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    $_SESSION["loggedin"] = true;
$_SESSION["username"] = $username;


    if (in_array(strtolower($username), $users)) {
        if ($password == "password") {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: index.php");
        } else {
            $err = "Incorrect password";
        }
    } else {
        $err = "User not found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-page">
        <div class="mx-auto w-full">
            <h1 class="text-center text-white">
                Make-It-All Login
            </h1>
        </div>
        <div class="login-wrapper">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <?php echo (!empty($err))
                            ? '<h4 style="margin-bottom: 2rem; color: red;">' . $err . '</h4>'
                            : ''; ?>
                        <div class="form-group">
                            <label for="username">
                                Username
                            </label>
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <input type="password" name="password" value="<?php echo $password; ?>">
                        </div>
                        <button type="submit" class="btn btn-lg">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</body>

</html>