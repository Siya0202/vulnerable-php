<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Secure Coding</title>
  </head>
  <body>
  <div class="container py-2">
    <div class="jumbotron">
      <h1>Login</h1>
      <form  method="POST" action="index.php">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
  <?php
    include "connection.php";
    session_start();

    if(isset($_POST['username']) && isset($_POST['password']))
    {
       
      $uname = stripslashes($_POST["username"]); 
      $uname = mysql_real_escape_string($_POST["username"]);

$password = stripslashes$_POST["password"]); 
$password = mysql_real_escape_string($_POST["password"]); 
      
      $query=mysqli_query($connection,"SELECT * FROM users WHERE username ='$uname' AND password ='$password'") or die("Query Unsuccessfull:".mysqli_error($connection));
     
      if($query_run)
      {
        echo "Login Successfull";
      }

      $num_rows=mysqli_num_rows($query);
      $row=mysqli_fetch_array($query);

      if($num_rows > 0)
      {
        $_SESSION["id"]=$row['id'];
        header("Location: profile.php?id=".$_SESSION["id"]);
      }
    }
  ?>

$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fcode.jquery.com%5C%2Fjquery-3.2.1.slim.min.js%22%7D"></script>";
$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fcdnjs.cloudflare.com%5C%2Fajax%5C%2Flibs%5C%2Fpopper.js%5C%2F1.12.9%5C%2Fumd%5C%2Fpopper.min.js%22%7D"></script>";
$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fmaxcdn.bootstrapcdn.com%5C%2Fbootstrap%5C%2F4.0.0%5C%2Fjs%5C%2Fbootstrap.min.js%22%7D"></script>";
echo htmlspecialchars($usercomment);  
</body>
</html>