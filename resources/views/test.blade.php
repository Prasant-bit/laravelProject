@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-3 bg-secondary ">
        <form action="users" method="post">
            @csrf
            <div class="my-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" >
            </div>
            
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
