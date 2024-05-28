
@extends('layouts.app')

@section('title', 'Edit Task')
@section('styles')
<style>
    .error-message{
        color:red;
    }
    </style>
@endsection
@section('content')

  <form method="POST" action="{{ route('tasks.update',['task' =>$task->id]) }}">
    @csrf
    @method('PUT')
    <div>
      <label for="title">
        <p class="text-green-800 font-bold">Title</p>
      </label>
      <input text="text" name="title"class="mb-4shadow-sm appearance-none
      border-3 rounded-md border-cyan-500 border w-full py-2 px-3 text-grey-400 leading-wide focus:outline "  id="title" value="{{ $task->title}}" />
      @error('title')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <label for="description"><p class="text-green-800 font-bold"> Description</p></label>
      <textarea name="description" class="mb-4shadow-sm appearance-none  border-3 rounded-md border-cyan-500 border w-full py-2 px-3 text-grey-400 leading-wide focus:outline "id="description" rows="5"> {{$task->description}}</textarea>
      @error('description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <label for="long_description"><p class="text-green-800 font-bold">long Description</p></label>
      <textarea name="long_description" class="mb-4shadow-sm appearance-none  border-3 rounded-md border-cyan-500 border w-full py-2 px-3 text-grey-400 leading-wide focus:outline "id="long_description" rows="10"> {{$task->long_description}}</textarea>
      @error('long_description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <button type="submit" class="font-medium text-brown-700 underline decoration-pink-800"  >Update Task</button>
    </div>
  </form>
@endsection
