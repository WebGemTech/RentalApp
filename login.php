<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="wrapper">
    <header>Login</header>
    <form method="post" action="admin/loginProcess.php">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Username">
        </div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password">
        </div>  
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Submit">
    </form>

    <?php
                $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl,"admin_un-authorize-user")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Unauthorize Admin Access
                            </div>";
                }
                if(strpos($fullUrl,"admin_username-empty")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Admin Username is empty
                            </div>";
                }
                if(strpos($fullUrl,"admin_password-empty")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Admin Password is empty
                            </div>";
                }

                if(strpos($fullUrl,"admin_invalid_password")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Invalid Admin Password
                            </div>";
                }
                ?>

</body>
</html>
