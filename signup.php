<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    
</head>
<body>
    <?php include 'navbar.html'; ?>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="signup_process.php" method="POST">
            <div class="input-box">
                <label for="name">Full Name</label>
                <input type="text" name="fullname" id="fullname" required>
            </div>
            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div> 
            <div class="input-box">
                <label for="username">Create a Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-box">
                <label for="password">Create a Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </div> 
</body>
</html>
