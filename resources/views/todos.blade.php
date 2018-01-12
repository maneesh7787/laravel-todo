@extends('inc.layout')
@section('pageTitle')
    Todo Project Dashboard
    @stop

@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
        <div class="row">
        <div class="col-lg-8 col-lg-offset-3">
            <form action="{{url('/create/todo')}}" method="POST">
                {{csrf_field()}}
                <input type="text" name="todoname" class="form-control input-lg" placeholder="enter todo name">

            </form>

        </div>

    </div>
    <hr>
    @foreach($todos as $todo)

        {{ $todo->todo }} <a href="{{route('todo.update',['id'=>$todo->id])}}" class="badge badge-primary">Update</a> |
        <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="badge badge-danger">delete</a> |
        @if($todo->completed==0)

        <a href="{{route('todo.completed',['id'=>$todo->id])}}"  class="badge badge-warning">mark as completed</a>
        @else
            <span class="badge badge-success">completed</span>
        @endif
        <hr>
    @endforeach
@stop