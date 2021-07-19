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
                    {{ Auth::user()->name }}<br>
                    @foreach (Auth::user()->getPermissionsViaRoles() as $item)
                    {{$item->name }},
                    @endforeach
                    <img src="{{ asset('static/maps.svg') }}"
                    {{-- width="110" height="32"  --}}
                    alt="Tabler"
                    class="navbar-brand-image">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
