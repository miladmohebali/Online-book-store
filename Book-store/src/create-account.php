<?php
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Add some basic validation here
  if(  empty($email) || empty($password)) {
    echo "All fields are required.";
  } else {
    // Connect to the database
    $db = mysqli_connect('localhost', 'db_user', 'db_password', 'db_name');
    
    // Check if the email already exists
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $check_email);
    if(mysqli_num_rows($result) > 0) {
      echo "This email already exists.";
    } else {
      // Encrypt the password before storing it
      $encrypted_password = password_hash($password, PASSWORD_BCRYPT);
      
      // Add the user to the database
      $insert_user = "INSERT INTO users ( email, password) VALUES ( '$email', '$encrypted_password')";
      if(mysqli_query($db, $insert_user)) {
        echo "Sign up successful.";
      } else {
        echo "Sign up failed.";
      }
    }
  }
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create-account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: rgb(48, 48, 48);">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- js -->
    <script>
        function Index() {
          location.replace("index.php")
        }
        function CreateAccount() {
          location.replace("create-account.php")
        }
        function SignIn() {
          location.replace("sign-in.php")
        }
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-4">
        <a class="navbar-brand" href="#">‌‌Book Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success mr-sm-4" type="submit">Search</button>
            <button onclick="CreateAccount()" type="button"  class="btn btn-primary mr-sm-2">Create account</button>
            <button onclick="SignIn()" type="button" class="btn btn-outline-primary">Sign in</button>
          </form>
        </div>
    </nav>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Create account</h3>
                        <div class="form-outline mb-4">
                          <form action="" method="post">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        </div>
                        <div class="form-outline mb-4">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        </div>
                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>
                        <input class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="Cre">
                        </form>
                        <hr>
                        <p>If you have account <a href="sign-in.php">click here...</a></p>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button onclick="Index()" type="button" class="btn btn-light" style="width: max-width;">go back to Home page</button>
    </div>
    
</body>
</html>