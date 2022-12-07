<div>
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed top-14 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-0 cursor-pointer fas fa-times text-slate-400"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="#">
                <h4 class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Voting System</h1>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors"
                        href="../pages/dashboard.html">
                        <div
                            class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-house text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="../pages/tables.html">
                        <div
                            class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-suitcase text-white"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tables</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{route('profile')}}">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit"
                            class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                            <div
                                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                            <span class="text-center ml-1 duration-300 opacity-100 pointer-events-none ease-soft">
                                Log Out
                            </span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end sidenav -->

    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                        <span
                            class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text"
                            class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                            placeholder="Type here..." />
                    </div>
                </div>

                <div class="relative">

                </div>

                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <i class="fa fa-user sm:mr-1 cursor-pointer" dropdown-trigger aria-expanded="false"></i>
                    <p class="hidden transform-dropdown-show"></p>
                    <ul dropdown-menu
                        class="z-10 text-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 before:text-5.5 transform-dropdown pointer-events-none absolute left-auto top-1/2 m-0 -mr-4 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-7 before:left-auto before:top-0 before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                        <li>
                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"
                                href="{{route('profile')}}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button type="submit"
                                    class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                    <li class="flex items-center pl-4 xl:hidden">
                        <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500"
                            sidenav-trigger>
                            <div class="w-4.5 overflow-hidden">
                                <i
                                    class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i
                                    class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>