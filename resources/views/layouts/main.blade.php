<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">


    <title>gcispherenouvellestechnologies</title>
 <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>

<body class="bg-gray-900 text-white">



<header class="border-b , border-gray-800">
<nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
<div class="flex flex-col lg:flex-row items-center">
    <a href="/">
        <img src="/img/3e30910891ae9ce42d174de99e3de348.jpg" alt="" class="w-32 flex-none">

    </a>
    <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
        <a href="{{route('home')}}">Enregistrez</a>
        <li><a href="#" class="hover:text-gray-400">Games</a> </li>
        <li><a href="#" class="hover:text-gray-400">Review</a> </li>
        <li><a href="#" class="hover:text-gray-400">Comming soon</a> </li>



    </ul>
</div>

  <div class="flex items-center mt-6 lg:mt-0">
      <div class="relative">
          <input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none focus shadow-outline sw-64 px-3 py-1 " placeholder="Search">
           <div class="absolute top-0 flex items-center h-full ml-2">

      </div>
      <div class="ml-6">
          <a href=""><img src="/img/" alt="avatar" class="rounded-full w-8"> </a>
      </div>


      </div>
  </div>
</nav>
</header>

 <main class="py-8">
     @yield('content')
 </main >

 <footer class="border-t border-gray-800">
     <div class="container mx-auto px-4 py-6">
         poyer by <a href="#" class="underline hover:text-gray-400">IGD API</a>
     </div>

 </footer>

</body>

</html>
