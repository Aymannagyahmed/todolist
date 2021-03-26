@extends('layouts.app')
@section('content')
<h1>Todos</h1>
@if (count($todos)>0)
@foreach ($todos as $todo)
<div class="card card-body bg-light p-3 mb-2 text-dark">
    <h3>
        <a href="todo/{{$todo->id}}"> {{$todo->text}}</a>
        <span class="badge badge-danger">
            {{$todo->due}}
        </span>
    </h3>
    
</div> 
@endforeach
@else
<h1>There are no todos</h1>
@endif   
@endsection

