
@extends('front.App')


@section('title')
login
@endsection

@section('content')

<div class="container">
    <div class="col-8 mx-auto my-2 py-2 mb-5">
        <h2 class=" text-center mb-5">add New user </h2>
        <div class="row">
            <form action="{{route('auth.create.user')}}" method="POST" class=" form  border p-4 shadow-sm  ">
                @csrf
                @if($errors->any())

                @foreach ($errors->all() as $error )

                  <div class="alert alert-danger">   {{$error }}</div>
               
                @endforeach

                @endif()

                 @if(session('succes'))
                 <div class="alert alert-success">   {{session('succes') }}</div>

                    
                @endisset
         
              <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="plase your Name" name="name" >
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="plase your Email" name="email" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">password</label>
                    <input type="password" class="form-control" placeholder="plase your passsword" name="password">
                  </div>
          
                  <input type="submit" value="Save " class=" bg-success form-control text-white border-none shadow-none"></input>
            </form>
        </div>
    </div>
</div>

    
@endsection