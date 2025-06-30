@props(['title'])

<!doctype html>
<html lang="en" class="h-full bg-white">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body class="h-full">
    <div class="min-h-full">
      <x-navbar/>
      <x-header>{{$title}}</x-header>

    
              {{$slot}}
   
 
    </div>
  
  </body>
 <x-footer/>
</html>


 
        
     