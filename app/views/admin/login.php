<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <style>
        #login {
            width: 300px;
            height: 250px;
            background-color: cornsilk;
            border: 3px solid black;
            text-align: center;
        }

        #login>input {
            margin-top: 15px;
            padding: 4px 4px;
        }

        .button1 {
            margin-top: 20px;
            width: 140px;
            font-weight: 700;
            color: green;
        }
        .logout {
            position: absolute;
            font-size: large;
            font-weight: 700;
            margin-left: 80%;
            margin-top: -8vh;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (
        isset($_POST['login'])
        && !empty($_POST['username'])
        && !empty($_POST['password'])
    ) {
        if (
            $_POST['username'] == 'Benas' &&
            $_POST['password'] == '12345'
        ) {
            $_SESSION['logged_in'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = "Benas";
        } else {
            print('<h4 id="h1ID"> Wrong username or password</h4>');
        }
    }
    ?>

    <div>
        <?php
        //logout logic
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            unset($_SESSION['logged_in']);
            print('<h4>You have been successfully logged out!</h4>');
        }
        //login logic
        if ($_SESSION['logged_in'] == true) {
            header('Location: ' . BASE_URL . '/admin/list.php');
        } else {
        ?>
            <form id="login" action="./login.php" method="post">
                <p> Sign up </p>
                <input type="text" name="username" placeholder="username = Benas" required autofocus></br>
                <input type="password" name="password" placeholder="password = 12345" required>
                <button class="button1" type="submit" name="login">Login</button>

            <?php } ?>
    </div>
</body>

</html>