<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
  <h2>Registration</h2>

  <form action="registration_process.php" method="post">

    <label for="name">Name: </label><br>
    <input type="text" name="name" id="name" required><br>
    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Password: </label><br>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm_password">Confirm Password: </label><br>
    <input type="password" name="confirm_password" id="confirm_password" required><br>
    <label for="phone">Phone: </label><br>
    <input type="text" name="phone" id="phone" required><br>

    <button type="submit">Register</button>
    
  </form>
</body>
<html>