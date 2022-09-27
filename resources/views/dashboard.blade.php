@extends('layouts.main')
@section('content')

{{-- i think can use it on nav --}}
{{-- @if (Auth::check()) --}}

<form action="{{ route('logout') }}" method="post">
@csrf
<button type="submit" class="btn btn-primary mt-3 mb-3 mx-3">LogOut</button>
</form>

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
                    Hi , {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endif --}}

@endsection