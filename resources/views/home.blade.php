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

                    {{ __('You are logged in!') }}

                    <h1> <a href="{{ route('forms.index') }}" class="btn btn-success"> Go To Form Page</a> </h1>
                    <h1> <a href="/api/users" class="btn btn-warning">Go to API Users Json</a> </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
