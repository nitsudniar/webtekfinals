<?php
    session_start();
    if (isset($_SESSION['id'])){
         header("Location: home.php");
    }
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Virtuoso</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <h1>Virtuoso</h1>

    <h2>Login</h2>
    <form action="includes/login_inc.php" method="POST">
        <input name="email" type="email" placeholder="Email" required><br>
        <input name="pwd" type="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
        if (isset($_SESSION['id'])){
            echo $_SESSION['id'];
        }else{
            echo '<span class="login">Please login</span>';
        }
    ?>
        <hr>
        <h2>Sign Up</h2>
        <form action="includes/signup_inc.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000000"><br>
            <input name="name" type="text" placeholder="Name" required><br>
            <input name="email" type="email" placeholder="Email" required><br>
            <input name="address" type="text" placeholder="Home Address" required><br>
            <input name="phone" type="tel" pattern="^\d{4}\d{3}\d{4}$" placeholder="Phone (xxxx-xxx-xxxx)" required><br>
            <input name="birthday" type="date"><br>
            <select name="gender" required>
               <option selected value="none">Gender</option>
                <option value="f">Female</option>
                <option value="m">Male</option>
            </select><br>
            <input name="pwd" type="password" placeholder="Password" required><br>
            Profile Image <input type="file" name="photo"><br>
            <input type="submit" value="Sign Up" name="submit" required>
        </form>
</body>

</html>
