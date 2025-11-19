@extends('layouts.main')

@section('content')

   <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="/img/WhatsApp Image 2025-10-12 at 20.24.21.jpeg" alt="" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">

              <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Menu</a>

              <a href="{{route('home')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Les Membres de Gci Nouvelle Technologie</a>
              <a href="" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projets</a>

              <a href="{{route('login')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Se Connecter</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>

              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

            </button>

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-hidden focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="" alt="" class="size-8 rounded-full" />
              </button>

              <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] focus:outline-hidden data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Menu</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="" alt="" class="size-10 rounded-full" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">GCI NOUVELLE TECHNOLOGIE</h1>
    </div>
  </header>
  <main>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">


     <div class="overflow-hidden bg-gray-700 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:pt-4 lg:pr-8">
        <div class="lg:max-w-lg">

          <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Gci NOUVELLE TECHNOLOGIE</p>
          <p class="mt-6 text-lg/8 text-gray-300">Notre Vision.</p>

            <p>

                Notre vision est de faire émerger une génération
                de développeurs, designers et ingénieurs chrétiens
                qui impacteront l’innovation responsable en France
                et ailleurs.
                Notre territoire est celui entre autre des start-ups
                tech et des écoles d’ingénieurs.
                Notre objectif
                Former des leader chrétiens compétents dans les
                domaines des nouvelles technologies afin
                d’influencer les sphères décisionnaires.
                Actes 17:6
                Ne les ayant pas trouvés, ils traînèrent Jason et quelques frères devant
                les magistrats de la ville, en criant: Ces gens, qui ont bouleversé le
                monde, sont aussi venus ici.

            </p>




            <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->









            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-black-400 lg:max-w-none">
            <div class="relative pl-9">
              <dt class="inline font-semibold text-black">
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="inline font-semibold text-black">
              </dt>
            </div>
            <div class="relative pl-9">
            </div>
          </dl>
        </div>
      </div>
      <img width="2432" height="1400" src="/img/WhatsApp Image 2025-10-12 at 20.24.21.jpeg" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228 md:-ml-4 lg:-ml-0" />
    </div>
  </div>
</div>


        <h1 class="text-3xl font-bold text-center text-gray-900 mt-16 mb-10">
            Nos Piliers
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 bg-gray-900 p-10 rounded-xl shadow-xl">

            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-3">ACCESSIBILITÉ</h2>
                <p class="text-gray-300">
                    Rendre l'univers de la technologie accessible et compréhensible pour tous.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-3">L'INNOVATION</h2>
                <p class="text-gray-300">
                    Susciter des vocations et engendrer de futurs innovateurs, créateurs et entrepreneurs
                    pour Dieu afin d’impacter leur génération.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-3">CONSEILS ET CONNEXIONS</h2>
                <p class="text-gray-300">
                    Connecter les personnes selon leurs besoins dans les nouvelles technologies.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-3">LA FINALITÉ</h2>
                <p class="text-gray-300">
                    Faire de l'évangélisation par l'influence et attirer les âmes à CHRIST.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-3">PRIÈRE</h2>
                <p class="text-gray-300">
                    Les membres engagés dans la prière et les temps d'intercession.
                </p>
            </div>

        </div>












    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
    <p class="text-sm/6 text-black-900">

        <div class="flex flex-nowrap">

            <div class="text-sm/6 text-black-900">01</div>


            <div class="text-sm/6 text-black-900">02</div>


            <div class="text-sm/6 text-black-900">03</div>

        </div>

      <strong class="font-semibold">Gci</strong><svg viewBox="0 0 2 2" aria-hidden="true" class="mx-2 inline size-0.5 fill-current"><circle r="1" cx="1" cy="1" /></svg>Regjoingnez le prochain evenement .....
    </p>

  </div>
  <div class="flex flex-1 justify-end">
    <button type="button" class="-m-3 p-3 focus-visible:-outline-offset-4">
      <span class="sr-only">Nouvelle </span>
      <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 text-gray-900">
        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
      </svg>
    </button>
  </div>
</div>



<!-- Include this script tag or install `@tailwindplus/elements





        <! Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->



        <h1>uuuuuuuu</h1>


        <div class="bg-white shadow-smgrid grid-cols-3 gap-4">
            <div class="visible ...">
                <h2>ACCESSIBILITÉ</h2>
                <p>
                    Rendre l'univers de la technologie accessible et comprehensible pour tous.
                </p>

            </div>

            <div class="visible ...">
                <h2>L'INNOVATION</h2>
                <p>
                    Susciter des vocations et engendrer de futurs inovateurs,createurs et entrepreneurs
                    pour Dieu qui vont impacter leur géneration
                </p>

            </div>

            <div>
                <h2>CONSEILS ET CONNEXIONS</h2>
                <p>
                    Connecter les personnes selon leurs besoins dans les nouvelles technologies.
                </p>


            </div>


            <div>
                <h2>LA FINALITE</h2>
                <p>
                    Faire de l'evangelisation par l'influence attirer les ames à CHRIST.
                </p>

            </div>



            <div>
                <h2>Les membres impliquer à la prière</h2>
                <p>
                    Les temps de prière
                </p>

            </div>


        </div>




        <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Rencontre Notre Equipe</h2>
      <p class="mt-6 text-lg/8 text-gray-600">Nous sommes dynamique .</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Noura</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">leader</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Régis</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Aide leader</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Philippe</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">B</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Carmel</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Front</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Severine</h3>
            <p class="text-sm/6 font-semibold text-indigo-600"></p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Arrive</h3>
            <p class="text-sm/6 font-semibold text-indigo-600"></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>








    </div>
  </main>
</div>

@endsection
