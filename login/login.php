<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form method="POST" class="my-login-validation" novalidate="">
        <div class="field">
          <input type="text" name="username" required>
          <label>Username - input "putrija"</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password - input "putrija"</label>
        </div>
        <div class="field">
          <input type="submit" value="Login" name="btnlogin">
        </div>
      </form>
    </div>

    <?php 
    if(isset($_POST['btnlogin']))
    {

        require ("../connection.php");
        $user_login=$_POST['username'];
        $pass_login=$_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '{$user_login}' and password = '{$pass_login}'";
        $query = mysqli_query($connection, $sql);

        while($row = mysqli_fetch_array($query)){
            $iduser = $row['id'];
            $user=$row['username'];
            $pass=$row['password'];
        }
        if($user_login == $user && $pass_login ==$pass){
            echo "Username: $user_login dan Password: $pass_login";
            header ("Location: ../index.php");
            $_SESSION['iduser'] = $iduser;
            $_SESSION['username'] = $user ;
        } else{
            echo "LOGIN GAGAL";
        }
    }
    ?>

  </body>
</html>
