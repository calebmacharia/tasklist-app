@extends('layouts.app')

@section('title', $task->title)
<div class="mb-4 ">
    <a href="{{route('tasks.index')}}" class="font-medium text-blue-700 underline decoration-pink-800">
        <-Go Back To List</a>

  </div>

@section('content')
  <p class="mb-4 text-orange-400">{{ $task->description }}</p>


  @if ($task->long_description)
    <p class="mb-4 text-orange-400" >{{ $task->long_description }}</p>
  @endif

  <p class="mb-4 text-grey-100 opacity-80" >created.{{ $task->created_at->diffForHumans()  }}</p>
  <p class="mb-4 text-grey-100 opacity-80">updated.{{ $task->updated_at->diffForHumans() }}</p>

    @if ($task->completed)
   <p class="bg-transparent  hover:bg-blue-500 text-blue-700 mb-4 font-semibold hover:text-white py-2 px-3 border border-blue-500 hover:border-transparent rounded"> Completed
    @else
   <p class="bg-red-100 hover:bg-blue-500 text-blue-700 mb-4 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> not completed
    @endif
  </P>
  <div>
    <a href= "{{route('tasks.edit',['task'=>$task->id])}}"class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        edit</a>
  </div>
  <div>
    <form method ="POST" action="{{route('tasks.toggle',['task'=> $task])}}">
        @csrf
        @method('PUT')
        <button type ="submit"class="bg-transparent hover:bg-blue-500 text-blue-700 mb-4 font-semibold hover:text-white py-2 px-4 border mt-4 border-blue-500 hover:border-transparent rounded" >
            mark as {{$task->completed ? 'Not completed':'completed'}}
        </button>
    </form>
  </div>
    <form action="{{route('tasks.destroy',['task'=> $task->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type ="submit" class="font-medium text-brown-700 underline decoration-pink-800" >Delete</button>

    </form>
  </div>
@endsection
