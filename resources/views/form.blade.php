@extends('layouts.app')

<a href="{{ route('tasks.index') }}">To Tasks List</a>

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection


@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea type="description" name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea type="long_description" name="long_description" id="long_description" rows="10">{{ $task->title ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset
        </button>
    </form>
@endsection
