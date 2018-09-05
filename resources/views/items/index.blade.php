@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3 pr-md-1">
            @include("partials.sidebar")
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(count($items)>=1)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td class="align-middle">{{$item->name}}</td>
                                    <td class="align-middle">{{$item->type}}</td>
                                    <td>
                                        <a href="/items/show/{{$item->id}}" class="btn btn-outline-success btn-sm float-left mr-1">View</a>
                                        <a href="/items/edit/{{$item->id}}" class="btn btn-outline-warning btn-sm float-left mr-1">Edit</a>
                                        {!!Form::open(['action'=>['ItemController@destroy', $item->id], 'method'=>'POST', 'class'=>'float-left'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Remove', ['class'=>'btn btn-outline-danger btn-sm'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-12">
                            {{$items->links()}}
                        </div>
                    @else
                        <h3 class="text-center">No items</h3>
                    @endif
                </div>
            </div>
        </div>
@endsection