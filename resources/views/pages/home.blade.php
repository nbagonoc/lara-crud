@extends("layouts.app")
@section("content")
    <div class="jumbotron text-center">
        <h1 class="display-4">Lara-Crud</h1>
        <p class="lead">Just a very simple CRUD web application made with Laravel</p>
        <a class="btn btn-outline-success btn-lg" href="{{route('item.list')}}" role="button">Get Started</a>
    </div>
@endsection