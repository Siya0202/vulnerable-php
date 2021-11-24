<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Secure Coding</title>
  </head>
  <?php include 'connection.php';
    session_start();
    $id=$_SESSION['id'];
    $query=mysqli_query($connection,"SELECT * FROM users where id='$id'")or die(mysqli_error($connection));
    $row=mysqli_fetch_array($query);
  ?>
<body>
<div class="container py-2">
    <div class="jumbotron">
        <h1>User Profile</h1>
        <form method="POST" action="profile.php" >
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"/>
            <div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <button name="logout" class="btn btn-danger">Log out</button>
            </div>
        </form>
    <div>
<div>
$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fcode.jquery.com%5C%2Fjquery-3.2.1.slim.min.js%22%7D"></script>";
$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fcdnjs.cloudflare.com%5C%2Fajax%5C%2Flibs%5C%2Fpopper.js%5C%2F1.12.9%5C%2Fumd%5C%2Fpopper.min.js%22%7D"></script>";
$usercomment = "<script src="https://en.functions-online.com/urlencode.html?command=%7B%22str%22%3A%22https%3A%5C%2F%5C%2Fmaxcdn.bootstrapcdn.com%5C%2Fbootstrap%5C%2F4.0.0%5C%2Fjs%5C%2Fbootstrap.min.js%22%7D"></script>";
echo htmlspecialchars($usercomment);  
</body>
</html>
      <?php
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $username = stripslashes($_POST["username"]); 
      $username = mysql_real_escape_string($_POST["username"]);
            $email = stripslashes($_POST['email']);
            $query = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$id'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            header("Location: index.php");
        }  
        if(isset($_POST['logout']))
        {
            unset($_SESSION['id']);
            session_destroy();
            header("Location: index.php");
        }            
?>