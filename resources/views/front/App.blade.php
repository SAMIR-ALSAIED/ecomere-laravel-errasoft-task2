<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
 

<a class="navbar-brand fw-bold" href="#">
    <i class="bi bi-shop text-primary fw-bold me-1 "></i> MyStore
</a>

  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- الروابط -->
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link @if(!Request::segment(1) ) active @endif " href="{{url('/')}}">Home</a></li>
          <li class="nav-item  "><a class="nav-link @if(Request::segment(1)==='products' ) active @endif" href="{{url('/products')}}">products</a></li>
          <li class="nav-item"><a class="nav-link @if(Request::segment(1)==='contact' ) active @endif" href="{{url('/contact')}}">Contact</a></li>
       
        @if (auth()->user()?->role == 'admin')
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manage products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('products.create')}}">Add product</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('products.index')}}">show products</a></li>
            </ul>
          </li>
          @endif
    
       
        </ul>

      
  
            <!-- Cart + Account مع بعض -->
            <div class="d-flex align-items-center ms-auto">
              <!-- Cart -->
              <a href="{{ url('/cart') }}" class=" position-relative me-2  ">
                  <i class="bi bi-cart-fill me-1  fs-2  text-dark  fw-bold "></i> 
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      0
                  </span>
              </a>

              @if (!auth()->check())
                
            
                  <button class="btn btn-primary dropdown-toggle ms-3" type="button" id="authDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user me-1"></i> Account
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                      <li>
                          <a class="dropdown-item " href="{{route('auth.login')}}">
                              <i class="fas fa-sign-in-alt me-2"></i> Login
                          </a>
                      </li>
                      <li>
                     
                      </li>
                  </ul>

                  @else

                 <form action="{{route('auth.logout')}}" method="POST">
                  @csrf
               
                 <input class=" btn btn-danger ms-2" type="submit" value="logout">
                 </form>
             

                  @endif
              
      

    

  
     
  
      </div>
    </div>
  </nav>



  @yield('content')





  <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-md-left">
      <div class="row">
  
        <!-- Logo & Description -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
          <h5 class=" fw-bold mb-3">MyStore</h5>
          <p>Shop the latest products with confidence. Fast shipping, secure payment, and quality service — all in one place.</p>
        </div>
  
        <!-- Links -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Shop</h6>
          <p><a href="#" class="text-white text-decoration-none">Men</a></p>
          <p><a href="#" class="text-white text-decoration-none">Women</a></p>
          <p><a href="#" class="text-white text-decoration-none">Accessories</a></p>
          <p><a href="#" class="text-white text-decoration-none">Sale</a></p>
        </div>
  
        <!-- Useful Links -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Useful Links</h6>
          <p><a href="#" class="text-white text-decoration-none">Your Account</a></p>
          <p><a href="#" class="text-white text-decoration-none">Shipping Info</a></p>
          <p><a href="#" class="text-white text-decoration-none">Returns</a></p>
          <p><a href="#" class="text-white text-decoration-none">Help</a></p>
        </div>
  
        <!-- Contact -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
          <p><i class="fas fa-home me-2"></i> tanta</p>
          <p><i class="fas fa-envelope me-2"></i> samir@122.com</p>
          <p><i class="fas fa-phone me-2"></i> +201225399159</p>
        </div>
  
      </div>
  
      <hr class="bg-white my-3">
  
      <!-- Bottom -->
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-6 text-center text-md-start mb-3 mb-md-0">
          <p class="mb-0">&copy; 2025 <strong>YourShop</strong>. All rights reserved.</p>
        </div>
        <div class="col-md-6 col-lg-6 text-center text-md-end">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
  
    </div>
  </footer>
  
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
