
@extends('layouts.app')

@section('title', 'Add Task')
@section('styles')
<style>
    .error-message{
        color:red;
    }
    </style>
@endsection
@section('content')

  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
      <label for="title" class="mb-4 ">
        <p class="text-green-800 font-bold">Title</p>
      </label>
      <input text="text" class="mb-4shadow-sm appearance-none  border-3 rounded-md border-cyan-500 border w-full py-2 px-3 text-grey-400 leading-wide focus:outline "name="title" id="title" value ="{{old('title')}}" />
      @error('title')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <label for="description" class="block uppercase mb-2"><p class="text-green-800 font-bold"> Description</p></label>
      <textarea name="description"class="shadow-sm appearance-none  border-3 rounded-md border-cyan-500 border w-full py-2 px-3 text-grey-400 leading-wide focus:outline" id="description" rows="5">{{old('description')}}</textarea>
      @error('description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>


    <div>''
      <label for="long_description"class="block uppercase mb-2"  ><p class="text-green-800 font-bold">Long Description</p></label>
      <textarea name="long_description"class="shadow-m border-3 border-cyan-500 rounded-md appearance-none border w-full py-2 px-3 text-grey-400 leading-wide focus:outline"  id="long_description" rows="10">{{oldphp('long_description')}}</textarea>
      @error('long_description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <button type="submit" class="font-medium text-blue-700 underline decoration-pink-800" >Add Task</button>
    </div>
  </form>
@endsection
