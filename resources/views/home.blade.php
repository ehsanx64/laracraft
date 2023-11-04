@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1>Welcome</h1>

        <p>Useful links for now:</p>
        <ul>
            <li><a class="hover:fg-red" href="{{ url('/login') }}">Login</a></li>
        </ul>
    </div>
    
@endsection