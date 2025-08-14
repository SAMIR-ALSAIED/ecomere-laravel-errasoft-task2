@extends('front.App')

@section('title')
product deat
@endsection

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6 "><img class="card-img-top mb-5 mb-md-0 " src="{{$product->image}}" style="width:350px;height:300px" /></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">{{$product->Name}}</h1>
                <div class="fs-5 mb-5">
                    <h3 class="my-5 fw-bold text-primary "> <span class="text-dark">price:</span> ${{$product->price}}</h3>
                </div>
                <p class="lead">{{$product->description	}}</p>
                <div class="d-flex my-5">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4 text-center mb-5 ">Related products</h2>
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
    
                        
                            <a href="" class="btn btn-dark mt-auto w-100">
                                <i class="bi bi-eye me-1"></i> show product
                            </a>
    
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
          
      
    </div>
    </div>
</section>

        </section>
@endsection