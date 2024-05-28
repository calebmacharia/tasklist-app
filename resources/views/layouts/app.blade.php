<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

  <title>Laravel 10 Task List App</title>
  @yield('styles')


<body class="container mx-auto mt-10 mb-10 max-w-lg bg-cyan-100 ">

  <ul class=" list-disc text-3xl mb-4 tracking-wide font-serif uppercase underline">@yield('title')</ul>
  <div>
    @if (session()->has('success'))
    <div>{{session('success')}}</div>
    @endif
    @yield('content')
  </div>
</body>

</html>
