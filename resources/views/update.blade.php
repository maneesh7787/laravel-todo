@extends('inc.layout')
@section('pageTitle')
    Todo Project - update record
@stop

@section('content')

    <div class="row">

            <form action="{{ route('todo.edit',['id'=>$todos->id]) }}" method="POST">
                {{csrf_field()}}
                <div class="col-lg-12">
                <input type="text" name="todoname" value="{{$todos->todo}}" class="form-control" >
                </div>
            </form>



    </div>

@stop