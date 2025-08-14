
@extends('front.App')


@section('title')
login
@endsection

@section('content')

<div class="container">
    <div class="col-8 mx-auto my-2 py-2 mb-5">
        <h2 class=" text-center mb-5">login </h2>
        <div class="row">
            <form action="{{route('auth.login')}}" method="POST" class=" form  border p-4 shadow-sm  ">
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
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="plase your Email" name="email" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">password</label>
                    <input type="password" class="form-control" placeholder="plase your passsword" name="password">
                  </div>
          
                  <div class="mt-4">
                    <input type="submit" value="login " class=" btn btn-primary  text-white border-none shadow-none"></input>
                    <a href="{{route('auth.register')}}" class=" btn btn-secondary ">create Account</a>
            
                  </div>
            

             
            
                </form>

        </div>
    </div>
</div>

    
@endsection