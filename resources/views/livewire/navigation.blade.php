<div class="fixed w-full z-10">
  <nav class="shadow-lg bg-gradient-to-r from-blue-600 to-blue-900" x-data="{ open:false }">
    <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" class="inline-flex items-center justify-center p-2 rounded-md text-white  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600" aria-expanded="false">
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <a href="{{ route('dashboard') }}" class="flex-shrink-0 flex items-center">
            <img class="shadow-lg rounded-full block h-10 w-auto" src="{{ asset('img/logo.svg') }}" alt="Workflow">
            <p class="font-mada text-white text-3xl ml-3">Ad<span class="font-bold">Form</span></p>
          </a>
        </div>
        @auth
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <div class="hidden sm:block">
            <button x-on:click="open = true" class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-800" aria-expanded="false">
              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
  
          <div class="ml-3 relative" x-data="{ open:false }">
            <div>
              <button x-on:click="open = true" class="bg-blue-900 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full shadow-lg" src="{{ auth()->user()->profile_photo_url }}" title="{{ auth()->user()->name }}" alt="{{ auth()->user()->name }}">
              </button>
            </div>
            <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                {{ __('Tu perfil') }}
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a  href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"  onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>
              </form>
            </div>
          </div>
        </div>
        @endauth
      </div>
    </div>
  
    <div x-show="open" x-on:click.away="open = false">
      <div class="absolute min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
        <div class="fixed flex flex-col top-0 left-0 w-72 bg-gray-50 h-full border-r shadow-lg">
          <div class="flex items-center justify-center h-14 border-b mt-3 pb-3">
            <a class="flex-shrink-0 flex items-center">
              <img class="shadow-lg rounded-full block h-12 w-auto" src="{{ asset('img/logo.svg') }}" alt="ImecEva">
              <p class="font-mada text-blue-700 text-4xl ml-3">Ad<span class="text-yellow-400 font-bold">Form</span></p>
            </a>
          </div>
          <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class="flex flex-col py-4 space-y-1">
  
              <li class="px-3 pb-4 border-b h-auto flex items-center">
                <div>
                  <img class="h-11 w-11 rounded-full shadow border-2 border-white" src="{{ auth()->user()->profile_photo_url }}" title="{{ auth()->user()->name }}" alt="{{ auth()->user()->name }}">
                </div>
                <div class="flex flex-row items-center ml-3">
                  <div class="text-sm font-light tracking-wide text-gray-500 overflow-ellipsis"><span class="font-medium">{{ Str::limit(ucwords(strtolower(auth()->user()->name)), 32)  }}</span><br><span class="font-medium">Administrador</span></div>
                </div>
              </li>
  
              <li class="px-5">
                <div class="flex flex-row items-center h-8">
                  <div class="text-sm font-light tracking-wide text-gray-500">Menú</div>
                </div>
              </li>
              
              <li class="border-b">
                <a href="{{ route('dashboard') }}"  x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-green-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Inicio</span>
                </a>
              </li>
              
              {{-- @if ($dato->nombre_rol == 'OP' || $dato->nombre_rol == 'Administrador' || $dato->nombre_rol == 'RRHH') --}}
                  
                <li class="px-5">
                  <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Administrar</div>
                  </div>
                </li>

                <li>
                  <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Asignaturas</span>
                  </a>
                </li>

                <li>
                 <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                   <span class="inline-flex justify-center items-center ml-4">
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" /></svg>
                   </span>
                   <span class="ml-2 text-sm tracking-wide truncate">Editoriales</span>
                 </a>
               </li>

               <li>
                   <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                       <span class="inline-flex justify-center items-center ml-4">
                           <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Localidades</span>
                    </a>
                </li>

                <li>
                  <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Textos</span>
                  </a>
                </li>

                <li>
                  <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" /></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Tipo de institución</span>
                  </a>
                </li>

                <li class="border-b">
                  <a href="" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-yellow-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Tipo de recursos</span>
                  </a>
                </li>
              {{-- @endif --}}
              
              <li>
                <a href="{{ route('profile.show') }}" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </span>
                    
                  <span class="ml-2 text-sm tracking-wide truncate">Tu perfil</span>
                </a>
              </li>
  
              <li class="border-b">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{ route('logout') }}" x-on:click="open = false" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-white hover:shadow text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-red-500 pr-6" onclick="event.preventDefault(); this.closest('form').submit();">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Cerrar sesión</span>
                  </a>
                </form>
              </li>
  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>

<header class="bg-transparent shadow">
    <div class="mx-auto py-5">
        header
    </div>
</header>