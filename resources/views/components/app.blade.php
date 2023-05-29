<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>document</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      @vite(['resources/js/app.js'])
</head>
<body>
      <div id="app">
            <div class="main-container d-flex">
                  <x-navbar></x-navbar>
                  <main style="padding: 0 2rem">
                        {{ $slot }}
                  </main>
            </div>
            {{-- x-navbar --}}
            <x-footer />
      </div>
      
</body>
</html>