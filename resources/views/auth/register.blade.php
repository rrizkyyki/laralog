@extends('layouts.main')
@section('content')

<a href="/" class="btn btn-primary mt-3 mx-3">Back</a>

<div class="container">
    <div class="row mt-3">
        <div class="col-md6">
            <div class="card">
                <div class="card-header">Registration Page</div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Johnny" class="form-control">
                            @error('name')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="example@mail.com" class="form-control">
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Passowrd</label>
                            <input type="password" name="password" id="password" placeholder="Insert Your Password" class="form-control">
                            @error('password')
                            <div class="text-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection