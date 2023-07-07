<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- nav bar  -->
    <nav class="navbar navbar-expand-lg bg-warning shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>M-shop</h1></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li calass="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>

          <?php
          $total = 0;
          if(isset($_SESSION['cart']))
          $total = count($_SESSION['cart']);
          ?>
          <div class="me-5"><a href="cart.php">Cart [<?php echo $total ?>] item(s)</a></div>
        </div>
      </div>
    </nav>
    <!-- nav bar ends -->

    <!-- body start -->
    <div class="container">
        <!-- row1  start -->
      <div class="row mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">
                  Some quick example text to build on the Product and make up
                  the bulk of the card's content.
                </p>
                <form action="add-to-cart.php" method="post">
                    <input type="hidden" name="pid" value="1">
                    <div class="float-start w-50">Qnty: <input type="number" name="qnty" class="w-50 border border-primary rounded"></div>
                    <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
                </form>
              </div>
          </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">
                  Some quick example text to build on the Product and make up
                  the bulk of the card's content.
                </p>
               <form action="add-to-cart.php" method="post">
                    <input type="hidden" name="pid" value="2">
                    <div class="float-start w-50">Qnty: <input type="number" name="qnty" class="w-50 border border-primary rounded"></div>
                    <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
                </form>
              </div>
          </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">
                  Some quick example text to build on the Product and make up
                  the bulk of the card's content.
                </p>
               <form action="add-to-cart.php" method="post">
                    <input type="hidden" name="pid" value="3">
                    <div class="float-start w-50">Qnty: <input type="number" name="qnty" class="w-50 border border-primary rounded"></div>
                    <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
                </form>
            </div>
            </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Product 4</h5>
                <p class="card-text">
                  Some quick example text to build on the Product and make up
                  the bulk of the card's content.
                </p>
              <form action="add-to-cart.php" method="post">
                    <input type="hidden" name="pid" value="4">
                    <div class="float-start w-50">Qnty: <input type="number" name="qnty" class="w-50 border border-primary rounded"></div>
                    <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
                </form>
              </div>
            </div>
        </div>
      </div>
      <!-- row1  ends -->
         <!-- row2 start -->
      <div class="row mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="float-start w-50">Qnty: <input type="number" class="w-50 border border-primary rounded"></div>
                <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
              </div>
          </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
               <div class="float-start w-50">Qnty: <input type="number" class="w-50 border border-primary rounded"></div>
                <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
              </div>
          </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
               <div class="float-start w-50">Qnty: <input type="number" class="w-50 border border-primary rounded"></div>
                <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
              </div>
            </div>
        </div>
              <div class="col-md-3 col-sm-6">
            <div class="card shadow pt-4" style="width: 18rem">
              <img src="https://m.media-amazon.com/images/I/71AvQd3VzqL._SX385_.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
               <div class="float-start w-50">Qnty: <input type="number" class="w-50 border border-primary rounded"></div>
                <div class="float-end w-50"><button class="btn btn-success btn-sm float-end">Add Card</button></div>
              </div>
            </div>
        </div>
      </div>
      <!-- row2 ends -->
    </div>
    <!-- body (container) ends -->
    <div class="container-fluid">
        <div class="row mt-4 p-4">
            <div class="col-12 text-center">Copyright 2022-2023 All Rights Reserved</div>
        </div>
    </div>
  </body>
</html>
