@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <h1>Welcome Blog</h1>
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
            <h2>Rizwan Ullah</h2>
            <h4>Contact List Aplication</h4>
            <a href="/home" class="btn btn-primary">Go to Home</a>

        </div> 
    </div>
</div>
@endsection
