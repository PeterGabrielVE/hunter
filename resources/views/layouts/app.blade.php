<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hunter</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- plugin css -->
    {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
    {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('assets/css/input-file.css') !!}
    <!-- end common css -->

    @stack('style')
</head>
<body>
    <div id="app">
      
        <main class="py-4" style="margin-top: 10rem">
            @yield('content')
        </main>
    </div>
    {!! Html::script('js/app.js') !!}
    {!! Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
    <!-- end base js -->
  
    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->
  
    <!-- common js -->
    {!! Html::script('assets/js/off-canvas.js') !!}
    {!! Html::script('assets/js/hoverable-collapse.js') !!}
    {!! Html::script('assets/js/misc.js') !!}
    {!! Html::script('assets/js/settings.js') !!}
    {!! Html::script('assets/js/todolist.js') !!}
    {!! Html::script('assets/js/file-input.js') !!}
    <!-- end common js -->
  
    @stack('custom-scripts')
</body>
</html>
