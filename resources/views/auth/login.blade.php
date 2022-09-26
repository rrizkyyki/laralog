@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif

            <div class="card">
                <div class="card-header">Login Page</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="email mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="example@mail.com" class="form-control">
                        </div>
                        <div class="password mb-3">
                            <label for="password" class="form-label">Passowrd</label>
                            <input type="password" name="passwoord" id="password" placeholder="Insert Your Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </form>
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection