<h1>
    Hello I'm a blade template
</h1>

<div>
    @forelse ($tasks as $task)
        <div>{{ $task->title }}</div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>
