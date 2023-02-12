<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Store</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- js -->
    <script>
        function CreateAccount() {
          location.replace("create-account.php")
        }
        function SignIn() {
          location.replace("sign-in.php")
        }
        function Search() {
          location.replace("search.php")
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
            <button onclick="Search()" class="btn btn-outline-success mr-sm-4" type="submit">Search</button>
            <button onclick="CreateAccount()" type="button" class="btn btn-primary mr-sm-2">Create account</button>
            <button onclick="SignIn()" type="button" class="btn btn-outline-primary">Sign in</button>
          </form>
        </div>
    </nav>

    <!-- <div style="background-color: rgb(180, 179, 179); width: max-width;">
      <div class="d-flex flex-row-reverse">
        <button type="button" class="btn btn-primary">Create account</button>
        <button type="button" class="btn btn-outline-primary">Sign in</button>
      </div>
    </div> -->

    <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel" style="background-color: rgb(48, 48, 48);">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/slider1.webp" class="d-block w-75 rounded mx-auto p-3 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/slider2.webp" class="d-block w-75 rounded mx-auto p-3 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../assets/slider3.webp" class="d-block w-75 rounded mx-auto p-3 rounded" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="p-3" style="background-color: rgb(180, 179, 179);">
        <div>
          <h1>Best sell in month</h1>
        </div>
        <div class="row m-3 d-flex justify-content-center">
            <div class="card m-2" style="width: 18rem;">
                <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
                <div class="card-body">
                  <h5 class="card-title">Dont make me thinking</h5>
                  <p class="card-text">Steve krug - 18$</p>
                  <a href="#" class="btn btn-primary">View & Buy</a>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
                <div class="card-body">
                  <h5 class="card-title">Dont make me thinking</h5>
                  <p class="card-text">Steve krug - 18$</p>
                  <a href="#" class="btn btn-primary">View & Buy</a>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
                <div class="card-body">
                  <h5 class="card-title">Dont make me thinking</h5>
                  <p class="card-text">Steve krug - 18$</p>
                  <a href="#" class="btn btn-primary">View & Buy</a>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
                <div class="card-body">
                  <h5 class="card-title">Dont make me thinking</h5>
                  <p class="card-text">Steve krug - 18$</p>
                  <a href="#" class="btn btn-primary">View & Buy</a>
                </div>
            </div>
        </div>
    </div>

    <div class="p-3" style="background-color: rgb(48, 48, 48);">
      <div>
        <h1 style="color: white;">Best sell in month</h1>
      </div>
      <div class="row m-3 d-flex justify-content-center">
          <div class="card m-2" style="width: 18rem;">
              <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
              <div class="card-body">
                <h5 class="card-title">Dont make me thinking</h5>
                <p class="card-text">Steve krug - 18$</p>
                <a href="#" class="btn btn-primary">View & Buy</a>
              </div>
          </div>
          <div class="card m-2" style="width: 18rem;">
              <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
              <div class="card-body">
                <h5 class="card-title">Dont make me thinking</h5>
                <p class="card-text">Steve krug - 18$</p>
                <a href="#" class="btn btn-primary">View & Buy</a>
              </div>
          </div>
          <div class="card m-2" style="width: 18rem;">
              <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
              <div class="card-body">
                <h5 class="card-title">Dont make me thinking</h5>
                <p class="card-text">Steve krug - 18$</p>
                <a href="#" class="btn btn-primary">View & Buy</a>
              </div>
          </div>
          <div class="card m-2" style="width: 18rem;">
              <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
              <div class="card-body">
                <h5 class="card-title">Dont make me thinking</h5>
                <p class="card-text">Steve krug - 18$</p>
                <a href="#" class="btn btn-primary">View & Buy</a>
              </div>
          </div>
      </div>
  </div>

  <div class="p-3" style="background-color: rgb(180, 179, 179);">
    <div>
      <h1>Best sell in month</h1>
    </div>
    <div class="row m-3 d-flex justify-content-center">
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
            <div class="card-body">
              <h5 class="card-title">Dont make me thinking</h5>
              <p class="card-text">Steve krug - 18$</p>
              <a href="#" class="btn btn-primary">View & Buy</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
            <div class="card-body">
              <h5 class="card-title">Dont make me thinking</h5>
              <p class="card-text">Steve krug - 18$</p>
              <a href="#" class="btn btn-primary">View & Buy</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
            <div class="card-body">
              <h5 class="card-title">Dont make me thinking</h5>
              <p class="card-text">Steve krug - 18$</p>
              <a href="#" class="btn btn-primary">View & Buy</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/pic1.jpg" class="rounded m-3" alt="Book">
            <div class="card-body">
              <h5 class="card-title">Dont make me thinking</h5>
              <p class="card-text">Steve krug - 18$</p>
              <a href="#" class="btn btn-primary">View & Buy</a>
            </div>
        </div>
    </div>
</div>
    
    <footer>
        <div class="container">
            <footer class="py-5">
              <div class="row">
                <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">About</a></li>
                  </ul>
                </div>
          
                <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">About</a></li>
                  </ul>
                </div>
          
                <div class="col-6 col-md-2 mb-3">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted" dideo-checked="true">About</a></li>
                  </ul>
                </div>
          
                <div class="col-md-5 offset-md-1 mb-3">
                  <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                      <label for="newsletter1" class="visually-hidden">Email address</label>
                      <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                      <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
          
              <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-dark" href="#" dideo-checked="true"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#" dideo-checked="true"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#" dideo-checked="true"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
              </div>
            </footer>
          </div>
    </footer>
</body>
</html>