@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3 pr-md-1">
            @include("partials.sidebar")
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['action' => 'ItemController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{Form::label('name', 'Name')}}
                                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Item name'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('type', 'Type')}}
                                {{Form::text('type', '', ['class'=>'form-control','placeholder'=>'Item type'])}}
                            </div>
                        </div>
                        {{Form::submit('Create', ['class'=>'btn btn-outline-success btn-sm'])}}
                        <a href="{{ URL::previous() }}" class="btn btn-outline-danger btn-sm">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection