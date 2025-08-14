
@extends('front.App')


@section('title')
Contact Us
@endsection

@section('content')

<div class="container">
    <div class="col-8 mx-auto my-5 py-2 mb-5">
        <h2 class=" text-center mb-5">Contact Us </h2>
        <div class="row">
            <form action="{{url('send_massage')}}" method="POST" class=" form  border p-4 shadow-sm  ">
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
                    <input type="text" class="form-control" placeholder="plase your Name" name="Name" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="plase your Email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Massage</label>
                 
                    <textarea class="form-control h-25" name="massage" cols="30" rows="5" placeholder="Your Massage"></textarea>
                </div>
               
                  <input type="submit" value="send massage " class=" bg-primary form-control text-white border-none shadow-none"></input>
            </form>
        </div>
    </div>
</div>

    
@endsection