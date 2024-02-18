@extends('auth.layouts')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>Dashboard</strong></div>
            <div class="card-body">
                @if (Session::has('success') && Session::get('success') == 'user')
                <div class="alert alert-success">
                    {{ 'hello' }}
                </div>
                @else
                <div class="alert alert-success">
                    Hello, Admin, You are logged in!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection