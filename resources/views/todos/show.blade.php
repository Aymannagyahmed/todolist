@extends('layouts.app')
@section('content')

    <a href="/" class="btn btn-secondary">Back</a>

    <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info" > Edit</a>
    
    {!! Form::open(['action' => ['TodoController@destroy',$todo->id],'method'=>'POST','class'=>'float-right']) !!}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
{!! Form::close() !!}

@endsection