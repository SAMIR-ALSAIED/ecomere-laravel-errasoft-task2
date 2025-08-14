
@extends('front.App')


@section('title')
Cart
@endsection

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-center border p-3 bg-dark text-white"> Shopping Cart</h2>

    <div class="d-flex justify-content-center align-items-center" style="height:20vh;">
        <img src="https://www.jumia.com.eg/assets_he/images/cart.668e6453.svg" class="img-fluid mb-1" alt="Cart Icon " >
      </div>
        




    <div class="table-responsive">
        <table class="table  text-center ">
            <thead class="table-light">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
             
                <tr>
                    <td><img src="assets/img/product2.jpg" width="70"></td>
                    <td>Product 2</td>
                    <td>$15.00</td>
                    <td>1</td>
                    <td>$15.00</td>
                    <td>
                        <a href="" class="btn  btn-danger ">
                          <i class="bi bi-trash fw-bold  "> </i> 
                        </a>
                      </td>
                      
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-end">
        <h4>Total: $35.00</h4>
        <button class="btn btn-success">Checkout</button>
    </div>
</div>


     
@endsection