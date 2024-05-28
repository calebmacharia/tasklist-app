
  @extends('layouts.app')

  <div>
  @section('title', 'The List Of Tasks')

  @section('content')
    <div>
        <a href="{{route('tasks.create')}}" class="font-medium text-blue-700 underline decoration-pink-800">
            Add Task!</a>
    </div>
</BR>
    @forelse ($tasks as $task)
      <div>
        <div>
            <ul class="list-disc">
            <li><a href="{{ route('tasks.show', ['task' => $task->id]) }}"@class(['font-bold','text-lg','text-green-700','capitalize','line-through'=>$task->completed])>{{ $task->title }}
           </a>
            </li>
        </ul>
          </div>
        @empty

      <div>There are no tasks!</div>
      @endforelse
      @if($tasks->count())
    <nav class ="mt-4 link-red-800" >
    {{$tasks->links()}}
    </nav>
  @endif

  @endsection



