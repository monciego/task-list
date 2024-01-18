@extends('layouts.app')

@section('title', $task->title)

@section("content")
<p>{{ $task->created_at }}</p>
<p>{{ $task->description }}</p>
<p>{{ $task->long_description }}</p>
@endsection