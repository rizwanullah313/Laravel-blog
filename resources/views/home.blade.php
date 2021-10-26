@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <h1>User Dashboard</h1>


                   <a href="/contacts/create" class="btn btn-primary" >Add Contact</a>
                   <a href="/contacts" class="btn btn-primary">Show Contacts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
