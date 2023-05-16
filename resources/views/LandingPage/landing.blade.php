<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe Bdp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light  navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <img src="{{ asset('assets/images/ngok.png') }}" alt="logo" height="60px">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">Shop</a>
                <a href="#qualification" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    {{-- jumbotron --}}
    <div class="bg">
      <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
              <div class="col-8">
                  <h6 class="pb-3 pe-5" style="color:coral">Selamat Datang Di</h6>
                  <h1 class="pb-2 pe-4" style="color: #DF2E38">Cafe Ngok-Ngok</h1>
                  <h3 class="pb-3 pe-4" style="color: #EB455F">
                      Fresh And Delicious Food Every Day
                  </h3>
                  <a type="submit" class="index btn btn-outline-danger" style="border-radius: 50px">Order Now</a>
              </div>
              <div class="col-4">
                  <img src="https://img.freepik.com/free-photo/american-shrimp-fried-rice-served-with-chili-fish-sauce-thai-food_1150-26576.jpg?w=1060&t=st=1678948694~exp=1678949294~hmac=9f0110cd8190428d9452afd0dfb08c3e2ff1a5b10f633e62ae1dc31f3dbc0b90" alt="makanan" 
                      class="d-inline-block align-text-top " height="300px">
              </div>
        </div>
      </div>
    </div>
    {{-- end jumbotron --}}

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Tentang</h1>
                <h1 class="position-absolute text-uppercase text-danger">Tentang</h1>
            </div><hr><br><br>

            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="https://img.freepik.com/free-photo/pork-meatballs-dark-surface_1150-43612.jpg?w=1060&t=st=1678891941~exp=1678892541~hmac=a13f46b12b673c540b81daefd130a078c911a9d9474d2b27e339fc0ae2e191fc" height="200px">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam corrupti exercitationem eaque minus consequatur? Fugi. Quia quo optio alias et. Omnis quis nulla aspernatur, eligendi fugiat repellendus assumenda quas blanditiis autem. Tenetur, voluptatibus sunt mollitia quod libero voluptate! Corrupti in nulla rem neque aspernatur vero fuga! Sunt, vel! Assumenda nemo dolor neque soluta nam ducimus. Voluptatibus, quis aspernatur sunt quas ipsa hic vitae, nisi inventore libero rem dicta architecto, eligendi ratione blanditiis fugiat sapiente saepe!</p>
                    <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Section-->
    <section style="background-color: #ffffff">
        <div class="container mt-5">
        <div class="row text-center text-dark">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Daftar</h1>
                <h1 class="position-absolute text-uppercase text-danger">Minuman</h1>
            </div>
        </div>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product foto-->
            <img class="card-img-top" src="https://kendariinfo.com/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-02-at-13.29.46-e1664688623625.jpeg" alt="..." />
            <!-- Product detail-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Okky</h5>
                <!-- Product harga-->
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Harga</span>
                    <span style="font-weight: 600">Rp.1000</span>
                  </li>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ea, quis vitae animi magnam praesentium modi consequatur dolorem neque atque.</p>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="">Beli</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
              <!-- Product foto-->
              <img class="card-img-top" src="https://kendariinfo.com/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-02-at-13.29.46-e1664688623625.jpeg" alt="..." />
              <!-- Product detail-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Okky</h5>
                  <!-- Product harga-->
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom p-2 d-flex justify-content-between">
                      <span>Harga</span>
                      <span style="font-weight: 600">Rp.1000</span>
                    </li>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ea, quis vitae animi magnam praesentium modi consequatur dolorem neque atque.</p>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="">Beli</a>
                </div>
              </div>
            </div>
          </div><div class="col mb-5">
          <div class="card h-100">
            <!-- Product foto-->
            <img class="card-img-top" src="https://kendariinfo.com/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-02-at-13.29.46-e1664688623625.jpeg" alt="..." />
            <!-- Product detail-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Okky</h5>
                <!-- Product harga-->
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Harga</span>
                    <span style="font-weight: 600">Rp.1000</span>
                  </li>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ea, quis vitae animi magnam praesentium modi consequatur dolorem neque atque.</p>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="">Beli</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

    {{-- foods --}}
    <section class="bg-danger pt-2">
        <div class="container ms-5 my-5">
            <div class="row my-4 ms-5 text-center">
                <h4 class="menu">Menu's Food</h4>
                <hr class="solid mb-3">
            </div>
            <div class="food">
                <div class="col-md-4 mb-3 display-flex">
                    <img src="{{ asset('assets/images/ayam.png') }}" alt="food" height="280px">
                </div>
                <div class="delivery-text">
                    <h1>Mie Ayam</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non placeat facere est maiores esse nostrum, 
                        molestiae veniam pariatur nulla, harum quisquam fugit. 
                        Molestias, laboriosam aperiam architecto dolor aliquid inventore laudantium?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus incidunt repellat numquam tenetur odit. 
                        Ullam et praesentium cum nulla assumenda possimus vitae aliquid tenetur. Accusamus rem ratione impedit omnis accusantium!
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- end foods --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
