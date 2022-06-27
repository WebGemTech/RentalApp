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
          <input type="email" name="emailid" placeholder="Email ID">
        </div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="password" placeholder="Password">
        </div>  
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
                $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl,"email-empty")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Please enter email id!
                            </div>";
                }
                if(strpos($fullUrl,"password-empty")==true) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Please enter password!
                            </div>";
                }
                if(strpos($fullUrl,"success")==true) {
                  echo "<div class='alert alert-primary' role='alert'>
                              Successfully login!
                          </div>";
              }
              if(strpos($fullUrl,"invalid-password")==true) {
                  echo "<div class='alert alert-primary' role='alert'>
                              Please enter valid password!
                          </div>";
              }
              if(strpos($fullUrl,"invalid-email")==true) {
                echo "<div class='alert alert-primary' role='alert'>
                            Please enter valid email id!
                        </div>";
            }
            if(strpos($fullUrl,"un-authorize-user")==true) {
                echo "<div class='alert alert-primary' role='alert'>
                            un-authorized user access!
                        </div>";
            }

                ?>

</body>
</html>
