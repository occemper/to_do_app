@extends('layouts.app')

<a href="{{ route('tasks.index') }}">To Tasks List</a>

@section('title', 'Edit Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" />
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">
                Description
            </label>
            <textarea type="description" name="description" id="description" rows="5">{{ $task->description }}</textarea>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea type="long_description" name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Edit Task</button>

    </form>
@endsection
