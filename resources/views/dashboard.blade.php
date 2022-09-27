@extends('layouts.main')
@section('content')

<a href="/" class="btn btn-primary mt-3 mb-3 mx-3">LogOut</a>

<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col-md6">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Body here
                </div>
            </div>
        </div>
    </div>
</div>

@endsection