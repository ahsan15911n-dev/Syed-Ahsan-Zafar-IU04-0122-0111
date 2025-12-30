<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Vault- Gaming Store</title>
 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
   
</head>


<body style="font-family: 'Montreal', sans-serif;">


<div style="background-color: #020003; ">
 <nav class="navbar">
<button class="btn btn-link text-white form-text" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
    <i class="fa-solid fa-bars fw-bold fs-4"></i>
</button>
 <a class="navbar-brand ms-2 text-white fw-bold fst-italic form-text ms-3 fs-4" href="#">GAMEVAULT </a>

 <form class="d-flex mx-auto    " style="width: 500px;">
         <div class="input-group">
          <input type="search" class="form-control" placeholder="Search entire store here..." id="search" name="search">
           <button class="btn btn-danger" type="submit">
      <i class="fa-solid fa-magnifying-glass"></i>
       </button>
  </div>
  </form>
     <ul class="navbar-nav d-flex flex-row gap-5 me-5">
<li class="nav-item form-text">
<a class="nav-link text-white fs-5 fw-semibold" href="#">Home</a>
  </li>
      <li class="nav-item form-text">
  <a class="nav-link text-white fs-5 fw-semibold" href="#">Product</a>
       </li>
  <li class="nav-item form-text ">
    <a class="nav-link text-white fs-5 fw-semibold" href="#">Contact</a>
     </li>

       <li class="nav-item form-text">
     <a class="nav-link text-white fs-5 fw-semibold" href="sign in.html"><i class="fa-solid fa-user"></i></a>
    </li>

  <li class="nav-item form-text">
  <a class="nav-link text-white fs-5 fw-semibold" href="#" data-bs-toggle="offcanvas"
    data-bs-target="#shoppingcart"><i class="fa-solid fa-cart-shopping"></i>(0) </a>
 </li>
  </ul>
     </nav>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar"
    style="width: 300px; background-color: #ffffff;">
     <div class="offcanvas-header text-white" style="background-color: #08010e;">
     <h5 class="offcanvas-title">Categories</h5>
     <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
 </div>
 <div class="offcanvas-body p-0">
     <div class="accordion accordion-flush" id="sidebarAccordion">
  <div class="list-group list-group-flush">
     <a href="#" class="list-group-item list-group-item-action ps-4">
    <i class="fa-brands fa-playstation me-2" style="color: black;"></i> PlayStation 5
   </a>
      <a href="#" class="list-group-item list-group-item-action ps-4">
<i class="fa-brands fa-playstation me-2" style="color: #1521a4;"></i> PlayStation 4
   </a>
      <a href="#" class="list-group-item list-group-item-action ps-4">
<i class="fa-brands fa-xbox me-2" style="color: green;"></i> Xbox
   </a>
      <a href="#" class="list-group-item list-group-item-action ps-4">
<i class="fas fa-gamepad me-2" style="color: red;"></i> Nintendo Switch
   </a>
      <a href="signin.php" target="_blank" class="list-group-item list-group-item-action ps-4">
    <i class="fa-solid fa-right-to-bracket me-2"></i> Sign In
   </a>
      <a href="singup.php" target="_blank" class="list-group-item list-group-item-action ps-4">
<i class="fa-solid fa-user-plus me-2"></i> Create Account
   </a>
            </div>
        </div>
      </div>
    </div>
   
  
    <div class="offcanvas offcanvas-end" tabindex="-1" id="shoppingcart" style="width: 400px; 
    background-color: rgb(255, 255, 255);">

        <div class="offcanvas-header text-white" style="background-color: #0d0117;">
  <h5 class="offcanvas-title">Cart</h5>
<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
</div>
<div class="offcanvas-body p-0">
</div>
</div>


<div id="promobanner" class="carousel slide">
<div class="carousel-inner w-100">

<div class="carousel-item active">
    <img src="images/60bd647d-0f8f-49f6-b53c-90370462d209.jpg" class="w-100" alt="sale"
style="height: 620px; ">
</div>

<div class="carousel-item">
     <img src="images/1.jpg" class="w-100" alt="xbox" style="height: 620px; ">
</div>

<div class="carousel-item">
    <img src="images/cb44e938bef3d877aa115fdba8968b18.jpg" class="w-100" alt="ps5" style="height: 620px;">
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#promobanner" data-bs-slide="prev">
     <span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#promobanner" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
    </div>

  <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">NEW ARRIVAL</h2>
            <a href="#" class="btn border-black">View All</a>
        </div>
        <div id="newarrival" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">
   <div class="carousel-item active">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
   <a class="text-decoration-none text-dark" href="">  
     <img src="images/images (2).jpg"  class="card-img-top"  alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column  ">
          <div class="card-title" style="min-height: 48px;">Red Dead Redemption 2 PS4</div>
          </a>
          <p class="text-danger fw-bold mb-3">$56.00</p>

          <button class="btn btn-danger w-100 mt-auto" type="submit" >
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 

           <img src="images/images (3).jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Forza Horizon 5</div> </a>
          <p class="text-danger fw-bold mb-3">$49.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">
  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href=""> 
          <img src="images/mario kart.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Mario Kart World SWITCH 2</div> </a>

          <p class="text-danger fw-bold mb-3">$61.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href="">  
          <img src="images/pokemon legends z-a .jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">POKEMON LEGENDS Z-A Switch 2</div> </a>
          <p class="text-danger fw-bold mb-3">$25.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
   <div class="carousel-item">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
     <img src="images/elden ring shadow of erd tree.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Elden Ring Shadow of the Erdtree PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$45.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/resident evil 4.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Resident Evil 4 Remake PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$43.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i>Add to Cart
      </button>
      </div>
  </div>
 </div>
           <div class="col-lg-3 col-md-4">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/Animal_Crossing_New_Horizons.jpg"
          class="card-img-top" alt="Product" style="height: 300px; ">
      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Animal Crossing: New Horizons Switch</div> </a>

          <p class="text-danger fw-bold mb-3">$36.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
      </div>
 <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/spiderman 2.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Marvel's Spider-Man 2 PS5</div> </a>
          <p class="text-danger fw-bold mb-3">$70.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newarrival" data-bs-slide="prev"
   style="width: 0px;">
   <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" ></span>

            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#newarrival" data-bs-slide="next"
   style="width: 0px ;">
   <span class="carousel-control-next-icon bg-dark rounded-circle p-3" ></span>

            </button>



        </div>


    </div>

<div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">PS5 GAMES</h2>
            <a href="#" class="btn border-black">View All</a>
        </div>
        <div id="ps5games" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">
   <div class="carousel-item active">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
   <a class="text-decoration-none text-dark" href="">  
     <img src="images/god of war ragnarok.jpg"  class="card-img-top"  alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column  ">
          <div class="card-title" style="min-height: 48px;">God of War Ragnarok PS5</div>
          </a>
          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto" type="submit" >
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 

           <img src="images/horizon forbidden west.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Horizon Forbidden West PS5</div> </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">
  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href=""> 
          <img src="images/ratchet and clank rift apart.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Ratchet & Clank: Rift Apart PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$54.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href="">  
          <img src="images/demon souls.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Demon's Souls Remake PS5</div> </a>
          <p class="text-danger fw-bold mb-3">$64.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
   <div class="carousel-item">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
     <img src="images/returnal ps5.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Returnal PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$49.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/ghost of tshushma.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Ghost of Tsushima Director's Cut PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i>Add to Cart
          </button>
      </div>
  </div>
      </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/final fantasy xvi .jpg"
          class="card-img-top" alt="Product" style="height: 300px; ">
      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Final Fantasy XVI PS5</div> </a>

          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>

  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/grand tursimo 7.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Gran Turismo 7 PS5</div> </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#ps5games" data-bs-slide="prev"
   style="width: 0px;">
   <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" ></span>

            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#ps5games" data-bs-slide="next"
   style="width: 0px ;">
   <span class="carousel-control-next-icon bg-dark rounded-circle p-3" ></span>

            </button>



        </div>


    </div>

    <div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">PS4 GAMES</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>

    <div id="ps4games" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="row g-4">

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                 <a href="" class="text-decoration-none text-dark">
                        <img src="images/god of war 2018_.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                        <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">God of War PS4</div>
                            </a>
                           <p class="text-danger fw-bold mb-3">$29.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/spiderman_.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">Marvel’s Spider-Man PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$39.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/last of us part 2.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">The Last of Us Part II PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$34.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/uncharted 4.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">Uncharted 4: A Thief’s End PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$19.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-4">

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/ghost of tshushma.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">Ghost of Tsushima PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$39.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/images (2).jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">Red Dead Redemption 2 PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$29.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/fifa 23.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">FIFA 23 PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$39.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card border shadow-sm h-100">
                            <a href="" class="text-decoration-none text-dark">
                                <img src="images/wwe 2k22.jpg" class="card-img-top" style="height: 300px;" alt="Product">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-title" style="min-height: 48px;">WWE 2K22 PS4</div>
                            </a>
                                    <p class="text-danger fw-bold mb-3">$34.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
                                    </button>
                                </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#ps4games" data-bs-slide="prev" style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ps4games" data-bs-slide="next" style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>

    </div>

</div>


    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">XBOX SERIES X</h2>
            <a href="#" class="btn border-black">View All</a>
        </div>
        <div id="xboxseriesx" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">
   <div class="carousel-item active">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
   <a class="text-decoration-none text-dark" href="">  
     <img src="images/Halo infinite.jpg"  class="card-img-top"  alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column  ">
          <div class="card-title" style="min-height: 48px;">Halo Infinite Xbox Series X</div>
          </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto" type="submit" >
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 

           <img src="images/FORZA MOTORSPORT.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Forza Motorsport Xbox Series X</div> </a>
          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">
  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href=""> 
          <img src="images/starfield.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Starfield Xbox Series X</div> </a>

          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href="">  
          <img src="images/GEARS5.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Gears 5 Xbox Series X</div> </a>
          <p class="text-danger fw-bold mb-3">$39.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
   <div class="carousel-item">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
     <img src="images/MICROFOST FLIGHT SIMULATOR.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Microsoft Flight Simulator Xbox Series X</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/FABLE.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Fable Xbox Series X</div> </a>

          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i>Add to Cart
          </button>
      </div>
  </div>
      </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/SEA OF THEIVES.jpg"class="card-img-top" alt="Product" style="height: 300px; ">
      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Sea of Thieves Xbox Series X</div> </a>

          <p class="text-danger fw-bold mb-3">$39.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>

  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/PERFECT DARK.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Perfect Dark Xbox Series X</div> </a>
          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#xboxseriesx" data-bs-slide="prev"
   style="width: 0px;">
   <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" ></span>

            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#xboxseriesx" data-bs-slide="next"
   style="width: 0px ;">
   <span class="carousel-control-next-icon bg-dark rounded-circle p-3" ></span>

            </button>

        </div>

    </div>


<div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">NINTENDO SWITCH</h2>
            <a href="#" class="btn border-black">View All</a>
        </div>
        <div id="nintendoswitch" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">
   <div class="carousel-item active">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
   <a class="text-decoration-none text-dark" href="">  
     <img src="images/LEGEND OF ZELDA.jpg"  class="card-img-top"  alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column  ">
          <div class="card-title" style="min-height: 48px;">The Legend of Zelda: Tears of the Kingdom</div>
          </a>
          <p class="text-danger fw-bold mb-3">$69.00</p>

          <button class="btn btn-danger w-100 mt-auto" type="submit" >
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 

           <img src="images/SUPERMARIO ODYSSEY_.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Super Mario Odyssey Switch</div> </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">
  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href=""> 
          <img src="images/SPLATOON 3.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Splatoon 3 Switch</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">

    <a class="text-decoration-none text-dark" href="">  
          <img src="images/METROID DREAD.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Metroid Dread Switch</div> </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
   <div class="carousel-item">
       <div class="row g-4">
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
     <img src="images/KIRBY THE FORGOTTEN LAND.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Kirby and the Forgotten Land Switch</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/SUPER SMASH BRO ULTIMATE SWITCH.jpg"  class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Super Smash Bros. Ultimate Switch</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i>Add to Cart
          </button>
      </div>
  </div>
      </div>
           <div class="col-lg-3 col-md-4">

  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/POKEMON SCARLETjpg.jpg"
          class="card-img-top" alt="Product" style="height: 300px; ">
      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Pokémon Scarlet Switch</div> </a>

          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">

 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>

  </div>
           </div>
           <div class="col-lg-3 col-md-4 ">
  <div class="card border shadow-sm h-100">
    <a class="text-decoration-none text-dark" href=""> 
      <img src="images/LUIGI MANSION 3.jpg" class="card-img-top" alt="Product" style="height: 300px; ">

      <div class="card-body d-flex flex-column">

          <div class="card-title" style="min-height: 48px;">Luigi's Mansion 3 Switch</div> </a>
          <p class="text-danger fw-bold mb-3">$59.00</p>

          <button class="btn btn-danger w-100 mt-auto">
 <i class="fa-solid fa-cart-arrow-down"></i> Add to Cart
          </button>
      </div>
  </div>
           </div>
       </div>
   </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#nintendoswitch" data-bs-slide="prev"
   style="width: 0px;">
   <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" ></span>

            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#nintendoswitch" data-bs-slide="next"
   style="width: 0px ;">
   <span class="carousel-control-next-icon bg-dark rounded-circle p-3" ></span>

            </button>



        </div>


    </div>
    <div class="container my-5">
        <h2 class="fw-bold mb-4 border-bottom border-danger border-3 pb-2 JSU">Shop by Category</h2>
        <div class="row g-4 text-center justify-content-center g-lg-5">
            <div class="col-lg-2 col-md-4 col-6">
   <a href="#" class="text-decoration-none text-dark">
       <div class="card border shadow-sm h-100">
           <div class="card-body">
  <i class="fa-brands fa-xbox fs-1 text-success mb-3 mt-3"  style="color: #199421;"></i> 
  <h6 class="card-title">Xbox</h6>
           </div>
       </div>
   </a>
            </div>
 <div class="col-lg-2 col-md-4 col-6">
   <a href="#" class="text-decoration-none text-dark">
       <div class="card border shadow-sm h-100">
           <div class="card-body">
  <i class="fa-brands fa-playstation fs-1 text-primary mb-3 mt-3"></i>
  <h6 class="card-title">PS4</h6>
           </div>
       </div>
   </a>
            </div>
<div class="col-lg-2 col-md-4 col-6">
   <a href="#" class="text-decoration-none text-dark">
       <div class="card border shadow-sm h-100">
           <div class="card-body">
  <i class="fa-brands fa-steam fs-1 text-danger mb-3 mt-3 " style="color: #ce0909"; ></i>
  <h6 class="card-title">Nintendo Switch</h6>
           </div>
       </div>
   </a>
</div>
            <div class="col-lg-2 col-md-4 col-6">
   <a href="#" class="text-decoration-none text-dark">
       <div class="card border shadow-sm h-100">
           <div class="card-body">
  <i class="fa-brands fa-playstation fs-1 text-info mb-3 mt-3"></i> 
  <h6 class="card-title">PS5</h6>
           </div>
       </div>
   </a>
            </div>
         
        </div>
    </div>

<footer class="bg-dark text-white mt-5 pt-5 pb-3">
 <div class="container">
   <div class="row">
   <div class="col-lg-3 col-md-6 mb-4">
       <h5 class="text-danger">About Us</h5>
  <p>Deals in all kind of games Discs,Xbox Playstation 5 , nintendo.</p>

   
     <p class="mb-2"><i class="fa-solid fa-phone me-2" style="color: #bec6d5;"></i> +923303098292</p>
              <p class="mb-2"><i class="fa-solid fa-phone me-2" style="color: #bec6d5;"></i> +923090078601</p>
       <p><i class="fa-solid fa-envelope me-2" style="color: #bec6d5;"> </i> sahsanzafar@gmail.com</p> 

            <p><i class="fa-solid fa-envelope me-2" style="color: #bec6d5;"> </i> Rayyanjaved@gmail.com</p> 
   </div>
   <div class="col-lg-3 col-md-6 mb-4">
       <h5 class="text-danger">PlayStation 5</h5>
       <ul class="list-unstyled">
               <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Action</a></li>
           <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Simulation</a></li>
           <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Sports</a></li>
       </ul>
   </div>
   <div class="col-lg-3 col-md-6 mb-4">
       <h5 class="text-danger">Xbox</h5>
       <ul class="list-unstyled">
      <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Action</a></li>
 <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Simulation</a></li>
     <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Sports</a></li>
       </ul>
   </div>
   <div class="col-lg-3 col-md-6 mb-4">
       <h5 class="text-danger">Follow Us</h5>
       <div class="d-flex gap-3 fs-3 mb-4">
           <a href="https://www.facebook.com/r.php?entry_point=login" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
           <a href="https://www.instagram.com/" class="text-white" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
           <a href="https://x.com/" class="text-white" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>  
       </div>
       <div class="mt-4">
           <h5 class="text-danger">For GameVault Updates</h5>
           <div class="input-group">
  <input type="email" class="form-control" placeholder="Your email">
  <button class="btn btn-danger" type="button">
      <i class="fa-solid fa-paper-plane"></i> 
  </button>
           </div>
       </div>
   </div>
            </div>
 <hr class="border-secondary my-4">
 <div class="text-center">
 <p class="mb-0"> 2025 Game Vault. All Rights Reserved.</p>
            </div>
 </div>
</footer>


</body>

</html>