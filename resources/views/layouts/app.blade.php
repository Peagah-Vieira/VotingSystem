<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Voting System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?') }}" rel="stylesheet" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/burger-trigger.js') }}" async></script>
</head>
<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- Sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-0 cursor-pointer fas fa-times text-slate-400" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="#">
                <h4 class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Voting System</h1>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 hover:shadow-lg hover:bg-white" href="{{route('dashboard')}}">
                    <div class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-house text-white"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Home</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap text-slate-700 font-semibold rounded-lg px-4 hover:shadow-lg hover:bg-white" href="{{route('users')}}">
                    <div class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-user text-white"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Users</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap text-slate-700 font-semibold rounded-lg px-4 hover:shadow-lg hover:bg-white" href="{{route('candidates')}}">
                    <div class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-user-tie text-white"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Candidates</span>
                    </a>
                </li>
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 font-semibold rounded-lg px-4 hover:shadow-lg hover:bg-white" href="{{route('profile')}}">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <nav class="relative flex flex-wrap justify-center items-center justify-between px-0 py-3 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                @yield('breadcrumb')
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto px-3">
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full md:ml-auto md:pr-4">
                        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{ asset('img/pessoalinda.jpeg') }}" alt="user photo">
                          </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden mx-10 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">
                                    Username
                                </span>
                                <span class="block text-sm font-medium text-gray-500 truncate">
                                    name@company.com
                                </span>
                            </div>
                            <ul class="py-1" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <div >
                                            <button type="submit" class="block w-full px-4 text-start py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                Sign out
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="#" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                            <div class="w-4.5 overflow-hidden">
                                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                            © 2022 made with <i class="fa fa-heart"></i> by 
                            <a href="https://github.com/Peagah-Vieira" class="font-semibold text-slate-700" target="_blank">Peagah</a>
                            and
                            <a href="https://github.com/Tayouza" class="font-semibold text-slate-700" target="_blank">Tayouza</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    @yield('edit-modal')
</body>
</html>