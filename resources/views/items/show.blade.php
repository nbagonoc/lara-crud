@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3 pr-md-1">
            @include("partials.sidebar")
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="card">
                <div class="card-body">
                    @if($item)
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->type}}</p>
                        <hr>
                        <a href="{{ URL::previous() }}" class="btn btn-outline-success btn-sm float-left mr-1">Back</a>
                        {!!Form::open(['action'=>['ItemController@destroy', $item->id], 'method'=>'POST', 'class'=>'float-left'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Remove', ['class'=>'btn btn-outline-danger btn-sm'])}}
                        {!!Form::close()!!}
                    @else
                        <h3 class="text-center">No items</h3>
                    @endif
                </div>
            </div>
        </div>
@endsection