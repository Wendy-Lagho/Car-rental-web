<?
//check if form is submitted

if($_SERVER["REQUEST_METHOD"]=="POST") {
  //RETREIVE FORM DATA
  $_email = $_POST["email"];
  $_password = $_POST["password"];

  //VALIDATE FORM DATA
  if(empty($_email) || empty($_password)){
    echo "Email and password are required";
  } else {
    //CONNECT TO DATABASE
    require_once "db_connect.php";

    //prepare and execute SQL query to retrieve user information based on email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    //check if user exists and password is correct
    if($user && password_verify($_password, $user["password"])){
      //start session and store user data
      session_start();
      $_SESSION["user_id"] = $user["id"];
      $_SESSION["user_email"] = $user["email"];

      //redirect to the booking page after successful login
      header("Location: booking.php");
      exit();
    }else {
      // Redirect back to the login page with an error message
      header("Location: login.php?error=Invalid email or password");
      exit();
    }
  }
}else {
  // Redirect back to the login page if the form is not submitted
  header("Location: login.php");
  exit();
}
// Close the database connection
$conn->close();
?>