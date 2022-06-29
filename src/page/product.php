<?php

  session_start(); /* Starts the session */

  
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jquery Product Card with Modal</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <style>
    .card:hover {
      box-shadow: 20px 20px 80px -44px #000;
      transition: 0.5s ease-in-out;
      cursor: pointer;
    }
  </style>

  <body>
    <form>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="/src/page/product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/src/page/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <h1 class="text-center font-weight-normal">
        Jquery Product Card with Modal
      </h1>
    </div>

    <div class="container mt-4 d-flex mb-5">
      <div class="row">
        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/HAoVjcCP9Q_saWG2mJD_PHieeUzY3bnEo5pOXaeT9JTurqAaBvmExzK3JVbvleWlQqv3OOL1oITPepo3hwLpZ3CYaaJHHnU8nTa9sg=w600" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">SONY</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">
                  Mh-Ch2844 Wirless Noise Cancelling Headphones
                </p>
                <p class="card-text mr-4 text-success">$180</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/bzMP-zKtZ5VMZnSse2n37etT03WAbL6cxDOQtUNnTvhlkV4OiTh4XZyaECACahysKkO4jyeoigotyaM7aFmScydnc4Nzxzu8qpO7zQ=w600" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">IPhone 12</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">
                  I Phone 5G Speed . An edge-do-edge Old Display
                </p>
                <p class="card-text mr-4 text-success">$12000</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/D-MalJik8ropVL6Z65wjXD5ZaeCra1TwZwi-HqL6zAgEdA_jZsRO-zevlnKYv1GBGWGL9F-jsMvL5-tYcp_i88WoxH2WWbXrs2AP=w346" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">NIKE</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">
                  Ressell Brook Bakcs up brashness with a shoes
                </p>
                <p class="card-text mr-4 text-success">$300</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/DCS0DCUFBVQqKtiwwHV2KpWmDHD5ACS1wRXVNUls58n5BDgp4oxVQpWTX9ZMYg9MNaBzkYOyesGai-Wyk0FWIzQ1PnyXIFUrk8Fy=w346" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">Water Bottle</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">
                  Perfect for my athlete on the go , this traning
                </p>
                <p class="card-text mr-4 text-success">$70</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/fCXZS59VSOv-cRlNIZx8G0tZVnSrAvFPrns3vhEeAmda5oAeX_AfqEIPdo3G4E6rIDWZG8JVJCteNFLKw608KkTa5BleWFqpnEwoEw=w346" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">Fossil</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">
                  Gen 5 smart watch the Carlyle HR black silicon
                </p>
                <p class="card-text mr-4 text-success">$600</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/A10AGvn9yvGDfoJGCWEhTgiaSJdnAYVUljfer3w0MIC37cTW3RaFx7HYwLYy8DfXY_0AezZn0c6DYfb9YsfmmEFj-lqFDXCf7BZnUg=w346" class="card-img-top w-100" />
            <div class="card-body">
              <h2 class="card-title">Laptop</h2>
              <div class="d-flex justify-content-between">
                <p class="card-text">HP Zbook Creat 67 Notebook Laptop</p>
                <p class="card-text mr-4 text-success">$2000</p>
              </div>
              <a
                href="#"
                class="card-link"
                data-toggle="modal"
                data-target="#modalId"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Code -->
    <div class="modal fade" id="modalId">
      <div class="modal-dialog bg-success">
        <div class="modal-content" style="transform: scaleX(1.4)">
          <div class="modal-header pb-2">
            <h1 class="font-weight-light ml-4">Description</h1>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row mt-2 p-3">
              <div class="col-md-6">
                <img src="" width="100%" height="280px" class="rounded" />
              </div>
              <div class="col-md-6">
                <h2 class="product_name"></h2>
                <p style="box-sizing: border-box" class="product_desc">
                  Lorem ipsum dolar sit mier contao djdkjfla this is an
                  important thing harum
                </p>
                <p>
                  Review : &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-star text-warning ml-2"></i>
                  <i class="fa fa-star text-warning ml-2"></i>
                  <i class="fa fa-star text-warning ml-2"></i>
                  <i class="fa fa-star text-warning ml-2"></i>
                  <i class="fa fa-star ml-2"></i>
                </p>

                <h4 class="product_price"></h4>
                <button class="btn btn-success mt-2" style="width: 150px">
                  Add to Card
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>

    <script>
      $(document).ready(function () {
        $(".card-link").click(function () {
          $(".rounded").attr("src", $(this).parent().siblings().attr("Src"));
          $(".product_name").text($(this).siblings("h2").text());
          $(".product_desc").text(
            $(this).siblings("div").find("p:nth(0)").text()
          );
          $(".product_price").text(
            $(this).siblings("div").find("p:nth(1)").text()
          );
        });
        $(window).resize(function () {
          if ($(window).width() < 600) {
            $(".modal-content").css("transform", "scaleX(1)");
          } else {
            $(".modal-content").css("transform", "scaleX(1.4)");
          }
        });
      });
    </script>
  </body>
</html>
