@extends("layouts.app")

@section("title", "The list of tasks")

@section("content")
<nav class="mb-4">
    <a class="font-medium text-gray-700 underline decoration-pink-500" href="{{ route('tasks.create') }}">Add Task</a>
</nav>

@forelse ($tasks as $task)
<div>
    <a href="{{ route('tasks.show', $task->id) }}" @class(['line-through'=> $task->completed])>
        {{ $task->title }}
    </a>
</div>
@empty
<div>There are no tasks!</div>
@endforelse

@if ($tasks->count())
<div>
    {{ $tasks->links() }}
</div>
@endif
@endsection