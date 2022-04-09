<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="columns-2 md:break-after-column">
        <p>Well, let me tell you something, ...</p>
        <p>Sure, go ahead, laugh...</p>
        <p>Maybe we can live without...</p>
        <p>Look. If you think this is...</p>
    </div>
    <div class="container mx-auto px-5px">

        <h1 class="text-4xl font-bold underline text-indigo-500 py-10 text-center">
            Hello world!!!
        </h1>
    </div>
    <div class="columns-2 md:columns-3">
        <img class="w-full aspect-square ..." src="{{ asset('storage/thumb1.jpg') }}" />
        <img class="w-full aspect-square ..." src="{{ asset('storage/thumb2.jpg') }}" />
        <img class="w-full aspect-square ..." src="{{ asset('storage/thumb3.jpg') }}" />
        <img class="w-full aspect-square ..." src="{{ asset('storage/thumb4.jpg') }}" />
        <!-- ... -->
    </div>
</body>
</html>