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
            <img src="" alt="" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
           
              <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Menu</a>
              
              <a href="{{route('home')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
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
          <h2 class="text-base/7 font-semibold text-indigo-400">Nouvelle ère</h2>
          <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Gci NOUVELLE TECHNOLOGIE</p>
          <p class="mt-6 text-lg/8 text-gray-300">Notre Vision.</p>
          <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
            <div class="relative pl-9">
              <dt class="inline font-semibold text-white">
                
                Futur leader
              </dt>
              <dd class="inline">Notre Espoir Eternel</dd>
            </div>
            <div class="relative pl-9">
              <dt class="inline font-semibold text-white">
                
                Une generation des leaders
              </dt>
              <dd class="inline">Domination.</dd>
            </div>
            <div class="relative pl-9">
              <dt class="inline font-semibold text-white">
                
                Database backups.
              </dt>
              <dd class="inline">Worship.</dd>
            </div>
          </dl>
        </div>
      </div>
      <img width="2432" height="1442" src="/img/3e30910891ae9ce42d174de99e3de348.jpg" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228 md:-ml-4 lg:-ml-0" />
    </div>
  </div>
</div>



<div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
  <div aria-hidden="true" class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
    <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)" class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"></div>
  </div>
  <div aria-hidden="true" class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
    <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)" class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"></div>
  </div>
  <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
    <p class="text-sm/6 text-gray-900">
      <strong class="font-semibold">Gci</strong><svg viewBox="0 0 2 2" aria-hidden="true" class="mx-2 inline size-0.5 fill-current"><circle r="1" cx="1" cy="1" /></svg>Regjoingnez le prochain evenement .....
    </p>
    <a href="{{route('home')}}" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Enregistrez Vous Maintenant <span aria-hidden="true">&rarr;</span></a>
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



<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<header class="bg-white">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
       
        <img src="" alt="" class="h-8 w-auto" />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <button popovertarget="desktop-menu-product" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900">
          Membres
          <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
            <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
          </svg>
        </button>

        <el-popover id="desktop-menu-product" anchor="bottom" popover class="w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                  <path d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Administration
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Seulement les admins</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                  <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Membre simple
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Liens pour discuter avec les membres</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                  <path d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Acces aux comptes
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Interaction avec les membres</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                  <path d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Les membres impliquées
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">L'integration des nouveau membre</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                  <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Les membres impliquer à la priere
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Les temps de priere</p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
                <path d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              decision
            </a>
            <a href="{{route('home')}}" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
                <path d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Implication
            </a>
          </div>
        </el-popover>
      </div>

      <a href="#" class="text-sm/6 font-semibold text-gray-900">Titre de l'evenement</a>
      <a href="#" class="text-sm/6 font-semibold text-gray-900">information sur l'intervenaant</a>
      <a href="#" class="text-sm/6 font-semibold text-gray-900">hfhh</a>
    </el-popover-group>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{route('home')}}" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <el-dialog>
    

         



<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

    
   
      </div>

      
</header>






<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<div class="relative">
 

  <el-popover id="desktop-menu-solutions" anchor="bottom" popover class="w-screen max-w-max overflow-visible bg-transparent px-4 transition transition-discrete [--anchor-gap:--spacing(5)] backdrop:bg-transparent open:flex data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
    <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm/6 shadow-lg ring-1 ring-gray-900/5">
      <div class="p-4">
        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
          <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
              <path d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <a href="#" class="font-semibold text-gray-900">
              Analytics
              <span class="absolute inset-0"></span>
            </a>
            <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
          </div>
        </div>
        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
          <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
              <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <a href="#" class="font-semibold text-gray-900">
              Engagement
              <span class="absolute inset-0"></span>
            </a>
            <p class="mt-1 text-gray-600">Speak directly to your customers</p>
          </div>
        </div>
        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
          <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
              <path d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <a href="#" class="font-semibold text-gray-900">
              Security
              <span class="absolute inset-0"></span>
            </a>
            <p class="mt-1 text-gray-600">Your customers&#039; data will be safe and secure</p>
          </div>
        </div>
        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
          <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
              <path d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <a href="#" class="font-semibold text-gray-900">
              Integrations
              <span class="absolute inset-0"></span>
            </a>
            <p class="mt-1 text-gray-600">Connect with third-party tools</p>
          </div>
        </div>
        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
          <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
              <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <a href="#" class="font-semibold text-gray-900">
              Automations
              <span class="absolute inset-0"></span>
            </a>
            <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
          <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
            <path d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" fill-rule="evenodd" />
          </svg>
          Watch demo
        </a>
        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
          <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
            <path d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" fill-rule="evenodd" />
          </svg>
          Contact sales
        </a>
      </div>
    </div>
  </el-popover>
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
