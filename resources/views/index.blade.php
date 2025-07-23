@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Gray</h2>

        <a class="flex items-center mt-6 lg:mt-0" href="{{route('home')}}">Enregistrez</a>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6  gap-12 border-b border-gray-800 pb-16">




            <div class="game ml-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/Capture d’écran 2025-05-28 à 02.14.45.png" alt="games over "   class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs  flex justify-center items-center h-full" style="right:-20px;bottom: -20px;">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 ml-8">
                    final fantasy
                </a>
                <div class="text-gray-400 mt-1">Playstation 4 </div>
            </div>



            <div class="game ml-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/Capture d’écran 2025-05-28 à 02.14.45.png" alt="games over "   class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs  flex justify-center items-center h-full" style="right:-20px;bottom: -20px;">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 ml-8">
                    final fantasy
                </a>
                <div class="text-gray-400 mt-1">Playstation 4 </div>
            </div>




            <div class="game ml-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/Capture d’écran 2025-05-28 à 02.14.45.png" alt="games over "   class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs  flex justify-center items-center h-full" style="right:-20px;bottom: -20px;">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 ml-8">
                    final fantasy
                </a>
                <div class="text-gray-400 mt-1">Playstation 4 </div>
            </div>





















        </div>


            <div class="flex flex-col lg:flex-row my-10">

                <div class="recently-reviewd w-full lg:w-3/4 mr-0 lg:mr-32">
                    kkkkkk lllopppp pooo
                    kkkkk
                </div>
                <div class="most-ancipated w-1/4 mr-32">

                    kkllmm ojjjj
                </div>


            </div>
    </div>

 <div class="flex my-10">

     <div class="recently-reviewd w-3/4 mr-32">
         <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently reviewd</h2>
         <div class="recently-reviewd-container space-y-12 mt-8">
             <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">Game Card


                 <div class="relative inline-block">
                     <a href="#">
                         <img src="" alt="games over "   class="w-40 hover:opacity-75 transition ease-in-out duration-150">
                     </a>
                     <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full">
                         <div class="font-semibold text-xs  flex justify-center items-center h-full" style="right:-20px;bottom: -20px;">
                             80%</div>


                     </div>

                 </div>

             </div>


             <div >Game Card</div>
             <div >Game Card</div>
         </div>
         kkkkkk lllopppp pooo
         kkkkk
     </div>
     <div class="most-ancipated lg:w-1/4 ">
         <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most anticpatired</h2>
          <div class="most-anticipated-container space-y-10 mt-8">
               <div class="game flex">
                   <a href="#">
                       <img src="" alt="games over "   class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                   </a>
                   <div class="ml-4">
                       <a href="" class="hover:text-gray-300">Cyberpank 277</a>

                       <div class="text-gray-400 text-sm mt-1">Sept 16 ,300
                           <div>
                   </div>
                   </div>

          </div>

         kkllmm ojjjj
     </div>

 </div>
@endsection
