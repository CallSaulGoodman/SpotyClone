
<?php
      include ("includes/config.php");
      include ("includes/classes/Account.php");
      include("includes/classes/Constants.php");
        $account = new Account($con);


      include ("includes/handlers/register-handler.php");
      include ("includes/handlers/login-handler.php");
      function getInputValue($name){
          if(isset($_POST[$name])){
              echo $_POST[$name];

          }
      }


?>

<html>
<head>

    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

    <?php
            if(isset($_POST['registerButton'])) {
                echo '<script>
    $(document).ready(function () {

            $("#loginForm").hide();
            $("#registerForm").show();




        });

</script>';
            }
            else{
               echo' <script>
                $(document).ready(function () {

                    $("#loginForm").show();
                    $("#registerForm").hide();




                });

                </script>';
            };
    ?>
<div id="background">
    <div id="loginContainer">
<div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
        <h2>Login to Account</h2>
        <p><?php
            echo $account->getError(Constants::$loginFailed);
            ?>
            <label for="loginUsername">Username</label>



        <input id="loginUsername" name="loginUsername" type="text" placeholder="Username"  value =" <?php getInputValue('loginUsername') ?>" required>
        </p>
        <p>

        <label for="password">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" placeholder="Username" required>
        </p>
        <button type="submit" name="loginButton">Login</button>
        <div class="hasAnAccountText">
            <span id="hideLogin">No Account yet? Sign up NOW!</span>
        </div>
    </form>

    <form id="registerForm" action="register.php" method="POST">
        <h2>Register Account</h2>
        <p>
            <?php
            echo $account->getError(Constants::$usernameTaken);
            echo $account->getError(Constants::$userNameCharacters);
            ?>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username"  value =" <?php getInputValue('Username') ?>" required>
        </p>
        <p>
            <?php
            echo $account->getError(Constants::$firstNameCharacters);
            ?>
            <label for="firstName">Firstname</label>
            <input id="firstName" name="firstName" type="text" placeholder="First Name" value =" <?php getInputValue('firstName') ?>" required>
        </p>
        <p>
            <?php
            echo $account->getError(Constants::$lastNameCharacters);
            ?>
            <label for="lastName">Lastname</label>
            <input id="lastName" name="lastName" type="text" placeholder="lastname"  value =" <?php getInputValue('lastName') ?>" required>
        </p>
        <p>
            <?php
            echo $account->getError(Constants::$emailInvalid);
            echo $account->getError(Constants::$emailDoNotMatch);
            echo $account->getError(Constants::$emailTaken);
            ?>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="email"  value =" <?php getInputValue('email') ?>" required>
        </p>
        <p>
            <label for="email2">Confirm Email</label>
            <input id="email2" name="email2" type="email" placeholder="Confirm Email" " <?php getInputValue('email2') ?>" required>
        </p>
        <p>
            <?php
            echo $account->getError(Constants::$passwordCharacters);
            echo $account->getError(Constants::$passwordNotAlphanumeric);
            echo $account->getError(Constants::$passwordDoNotMatch);
            ?>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password" required>
        </p>
        <p>
            <label for="password2">Confirm Password</label>
            <input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
        </p>
        <button type="submit" name="registerButton">Sing UP!</button>
        <div class="hasAnAccountText">
            <span id="hideRegister">Have an Account? Login here!</span>
        </div>
    </form>
</div>
        <div id="loginText">
        <h1>Get great Music, NOW</h1>
        <h2>Listen for FREE!!</h2>
        <ul>
            <li>Dicover Music you love</li>
            <li>Create own Playlists</li>
            <li>Follow artists to keep up to date</li>
        </ul>
        </div>
</div>
</div>
</body>
</html>