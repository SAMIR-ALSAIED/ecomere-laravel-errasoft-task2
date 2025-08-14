@extends('admin.products.master')


@section('content')
<h2 class="text-center my-4">All products</h2>

<div class="container">

    @if (session('success') != null)


    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
  
    <strong>  {{{session('success')}}} </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    

@endif
    <div class="row">
        <di class="col-12 py-3">
            {{-- <a href="" class=" btn btn-primary mb-3">Add Product</a> --}}
  

            <table class="table  table-hover table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">description	</th>
                    <th scope="col">Aaction</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                        
                  <tr>
                    
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>{{$product->id}}</td>
                    <td>{{$product->Name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{\Str::limit($product->description	,30)}}</td>
                    <td class="d-flex gap-2 ">
                        <a href="{{route('products.edit',$product->id)}}" class=" btn btn-primary">edit</a>

                        <form action="{{route('products.destroy',$product->id)}}" method="POST">

                            @csrf
  
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
             
                </tbody>
              </table>
                  
             <div class="d-flex  mt-5">
                {{ $products->links() }}
            </div> 
        </div>
    </div>
</div>


@endsection