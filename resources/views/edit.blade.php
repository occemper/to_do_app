@extends('layouts.app')

<a href="{{ route('tasks.index') }}">To Tasks List</a>

@section('content')
    @include('form', ['task' => $task])
@endsection
