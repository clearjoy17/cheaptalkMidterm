@extends('base')

@section('content')

<style>
    p{
        text-align: center;
        color: white;
    }
    .card-body{
        color: white;
    }
</style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card border border-light shadow-0 mb-3 mt-5" style="background-color: grey;">
            <div class="card-header text-white">
                <h3 class="card-title mt-2" style="text-align: center;"><i class="fas fa-user-circle"></i><br> User Login</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <p>Don't have an account?</p>
                    <p>Click here to <a href="/register" style="color: white;">register!</a></p>
                    <button type="submit" class="btn btn-outline-light" data-mdb-ripple-color="dark">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop
