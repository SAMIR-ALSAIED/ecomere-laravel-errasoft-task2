@extends('front.App')

@section('title')
Home
@endsection

@section('content')

        <!-- Header-->
        <header class="">
            <img class="home-image" src="../front/assets/0.jpeg " >

            <div class="container px-4 px-lg-5 my-5 ">
{{--                 
                <div class="text-center text-white my-5 mt-5">

                    {{-- <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                    <a href="" class="  btn  btn-dark w-25 rounded-4 mt-4 p-2">Shop</a> --}}
                {{-- </div>  --}}
            </div>
        </header>
        <!-- Section-->
       
          
        <section class="my-4">
            <div class="container px-4 px-lg-5 mt-3 py-2">
                <h2 class=" text-center py-2 mb-5"> Products</h2>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    
                    @foreach ($products as $product )
                        

                        <div class="col">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #f8f9fa;">
                                    <img src="{{$product->image}}" class="img-fluid" alt="" style="max-height: 180px; object-fit: contain;">
                                </div>
                                <div class="card-body text-center d-flex flex-column">
                                    <h6 class="card-title mb-2">{{$product->Name}}</h6>
                                    <p class="fw-bold text-primary fs-5 mb-3">${{$product->price}}</p>
            
                                    <!-- Add to Cart link -->
                                    <a href="{{url('products/'. $product->id)}}" class="btn btn-dark mt-auto w-100">
                                        <i class="bi bi-eye me-1"></i>  show product
                                    </a>
            
                                </div>
                            </div>
                        </div>
                        @endforeach

                    
                </div>    


            </div>

        </section>
@endsection