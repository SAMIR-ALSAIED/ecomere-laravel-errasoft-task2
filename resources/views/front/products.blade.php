@extends('front.App')

@section('title')
products

@endsection

@section('content')




<div class="container mt-5 mb-5">
    <div class="row">
      <!-- Sidebar -->
      <div class="container mt-4 h-100">
          <div class="row">
            
            <div class="col-md-3 h-100">
              <div class="bg-white p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
            
                
                <div>
            
                  <div class="input-group mb-4 mt-2">
                    <input type="text" class="form-control shadow-none border-none" placeholder="Search products...">
                    <button class="btn btn-primary" type="button">
                      <i class="bi bi-search"></i> بحث
                    </button>
                  </div>
                  <h5 class="fw-bold mb-4 text-primary">Categories</h5>

                  
                  <ul class="list-group list-group-flush mb-4" id="categoryList">
                    <li class="list-group-item px-0 py-2"><a href="#" class="text-decoration-none text-dark">All</a></li>
                    <li class="list-group-item px-0 py-2"><a href="#" class="text-decoration-none text-dark">Shoes</a></li>
                    <li class="list-group-item px-0 py-2"><a href="#" class="text-decoration-none text-dark">Clothing</a></li>
                    <li class="list-group-item px-0 py-2"><a href="#" class="text-decoration-none text-dark">Accessories</a></li>
                  </ul>
            
                  
                  <hr>
                </div>
            
                
                <div>
                  <h5 class="fw-bold mb-3 text-primary">Filter by Price</h5>
                  <input type="range" class="form-range" min="0" max="1000" id="priceRange" value="500"
                    oninput="document.getElementById('priceValue').innerText = this.value">
                  <p class="mt-2 mb-3">Max Price: <strong>$<span id="priceValue">500</span></strong></p>
                  <button class="btn btn-outline-primary w-100">Apply Filter</button>
                </div>
            
              </div>
            </div>
            
            

            <div class="col-md-9">
              <h2 class=" text-center py-2">All Products</h2>
            <div class="row g-4" id="product-list">
              
            
              <div class="container py-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                  @foreach ($products as $product)
                  <div class="col">
                      <div class="card h-100 shadow-sm border-0">
                          <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #f8f9fa;">
                              <img src="{{ $product->image }}" class="img-fluid" alt="{{ $product->Name }}" style="max-height: 180px; object-fit: contain;">
                          </div>
                          <div class="card-body text-center d-flex flex-column">
                              <h6 class="card-title mb-2">{{ $product->Name }}</h6>
                              {{-- <h6 class="card-title mb-2">{{ $product->user }}</h6> --}}
                              <h6 class="card-title mb-2">{{ $product->user->name }}</h6>
                              <p class="fw-bold text-primary fs-5 mb-3">${{ $product->price }}</p>
                              <a href="{{url('products/'. $product->id)}}" class="btn btn-dark mt-auto w-100">
                                  <i class="bi bi-eye me-1"></i> show product
                              </a>
                          </div>
                      </div>
                  </div>
              @endforeach

            
              
             <div class="d-flex justify-content-center mt-4">
                  {{ $products->links() }}
              </div> 
              
                </div>
            </div>
            
            
            
           
       
            
            </div>
            {{-- <nav class="ms-5 me-5 my-5" aria-label="...">
              <ul class="pagination ms-5 me-5">
              
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#" aria-current="page">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
             
              </ul>
            </nav> --}}
          
          </div>
          
          </div>
     
        </div>
        
      
      
    </div>
  </div>
    
@endsection