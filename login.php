<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <label for="email">Email: </label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="password">Password: </label><br>
      <input type="password" id="password" name="password" required><br>
      <button type="submit">Login</button>
    </form>
  </body>
</html>
