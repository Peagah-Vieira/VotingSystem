@extends('layouts.app')

@section('title', 'Voting System - Home')   

@section('breadcrumb')
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="{{route('dashboard')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">
                    Home
                </a>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- Mini-Cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Users</p>
                                    <h5 class="mb-0 font-bold">
                                        1500
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800">
                                    <i class="fa-solid fa-user text-lg relative top-2.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Admins</p>
                                    <h5 class="mb-0 font-bold">
                                        1000
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800">
                                    <i class="fa-solid fa-user-secret text-lg relative top-2.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Candidates</p>
                                    <h5 class="mb-0 font-bold">
                                        8000
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800">
                                    <i class="fa-solid fa-user-tie text-lg relative top-2.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card4 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Votes</p>
                                    <h5 class="mb-0 font-bold">
                                        500
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800">
                                    <i class="fa-solid fa-check-to-slot text-lg relative top-2.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

        <!-- Cards -->
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <!-- Colaborator 1 -->  
                <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <div class="flex flex-wrap -mx-3">
                                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                                    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHS6axQRJ6CVw/profile-displayphoto-shrink_800_800/0/1661532866902?e=1675900800&v=beta&t=35hOYx6guP1VHvMXupLtnVoUjNtCZgy6Hyx1pNKVRfQ" class="inline-flex items-center justify-center w-12 h-12 mr-2 text-white transition-all duration-200 ease-in-out text-sm rounded-xl"/>
                                    <h6 class="mb-0">Peagah</h6>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-4">
                            <p class="leading-normal text-sm">
                                I'm 19 years old, I'm studying Computer Technician and I've been passionate about technology since I was little.
                                In the last few months I studied object-oriented PHP, now I'm using Laravel framework.
                            </p>
                            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">
                                    Full Name:</strong> &nbsp; Pedro Henrique Vieira
                                </li>
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700"
                                    >Mobile:</strong> &nbsp; (22) 99843-8864</li>
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">
                                    Email:</strong> &nbsp; peagahvieira2003@gmail.com
                                </li>
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">
                                    Location:</strong> &nbsp; Brazil, Rio de Janeiro
                                </li>
                                <li class="relative block px-4 py-2 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                                    <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-600" href="https://github.com/Peagah-Vieira" target="blank">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900" href="https://www.linkedin.com/in/pedro-henrique-vieira-073b62236/" target="blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Colaborator 2 -->  
                <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <div class="flex flex-wrap -mx-3">
                                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                                    <img src="https://media-exp1.licdn.com/dms/image/C5603AQGAxIZGjSrstg/profile-displayphoto-shrink_800_800/0/1629233909392?e=1675900800&v=beta&t=ksmZpJdBvgylgzfGa467V6Zy9xQGhRM42QuTMNpuYQ8" class="inline-flex items-center justify-center w-12 h-12 mr-2 text-white transition-all duration-200 ease-in-out text-sm rounded-xl"/>
                                    <h6 class="mb-0">Taylor</h6>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-4">
                            <p class="leading-normal text-sm">
                                I communicate easily, I am confident, open and, above all, I value contact with people and the development of positive relationships.
                            </p>
                            <hr class="h-px my-9 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700">
                                    Full Name:</strong> &nbsp; Taylor Canabarro de Souza
                                </li>
    
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700"
                                    >Mobile:</strong> &nbsp; (51) 99639-0912
                                </li>
    
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">
                                    Email:</strong> &nbsp; tayouzadev@gmail.com
                                </li>
    
                                <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700">
                                    Location:</strong> &nbsp; Brazil, Rio Grande do Sul
                                </li>
    
                                <li class="relative block px-4 py-2 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                                    <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-600" href="https://github.com/Tayouza" target="blank">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900" href="https://www.linkedin.com/in/taylorcanabarro/" target="blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Stacks -->
                <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <h6 class="mb-0">Stacks</h6>
                        </div>
                        <div class="flex-auto p-4">
                            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                <li class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 rounded-t-lg text-inherit">
                                <div class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="kal" class="w-full shadow-soft-2xl rounded-xl" />
                                </div>
                                <div class="flex flex-col items-start justify-center">
                                    <h6 class="mb-0 leading-normal text-sm">PHP</h6>
                                </div>
                                <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-gray-800 hover:text-gray-900 hover:shadow-none active:scale-100" 
                                href="https://www.php.net" target="blank">
                                    View more
                                </a>
                                </li>
                                <li class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                <div class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="kal" class="w-full shadow-soft-2xl rounded-xl" />
                                </div>
                                <div class="flex flex-col items-start justify-center">
                                    <h6 class="mb-0 leading-normal text-sm">Laravel</h6>
                                </div>
                                <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-gray-800 hover:text-gray-900 hover:shadow-none active:scale-100" 
                                href="https://laravel.com" target="blank">
                                    View more
                                </a>
                                </li>
                                <li class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                <div class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                    <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="kal" class="w-full shadow-soft-2xl rounded-xl" />
                                </div>
                                <div class="flex flex-col items-start justify-center">
                                    <h6 class="mb-0 leading-normal text-sm">Tailwind</h6>
                                </div>
                                <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-gray-800 hover:text-gray-900 hover:shadow-none active:scale-100" 
                                href="https://tailwindcss.com" target="blank">
                                    View more
                                </a>
                                </li>
                                <li class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                <div class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                    <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="kal" class="w-full shadow-soft-2xl rounded-xl" />
                                </div>
                                <div class="flex flex-col items-start justify-center">
                                    <h6 class="mb-0 leading-normal text-sm">MySQL</h6>
                                </div>
                                <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-gray-800 hover:text-gray-900 hover:shadow-none active:scale-100" 
                                href="https://www.mysql.com" target="blank">
                                    View more
                                </a>
                                </li>
                                <li class="relative flex items-center px-0 py-2 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                                <div class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                    <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" alt="kal" class="w-full shadow-soft-2xl rounded-xl" />
                                </div>
                                <div class="flex flex-col items-start justify-center">
                                    <h6 class="mb-0 leading-normal text-sm">Github</h6>
                                </div>
                                <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-gray-800 hover:text-gray-900 hover:shadow-none active:scale-100" 
                                href="https://github.com/Peagah-Vieira/VotingSystem" target="blank">
                                    View more
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <!-- Projects -->
        <div class="flex-none w-full max-w-full px-3 mt-6">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6 class="mb-1">Projects</h6>
                    <p class="leading-normal text-sm">Development Projects</p>
                </div>
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <!-- Project 1 -->
                        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                    <img src="{{ asset('img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
        
                                <div class="flex-auto px-1 pt-6">
                                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                        Project #1
                                    </p>
                                    <h5>Coming Soon</h5>
                                    <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                    <div class="flex items-center justify-between">
                                        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 2 -->
                        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                    <img src="{{ asset('img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
        
                                <div class="flex-auto px-1 pt-6">
                                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                        Project #2
                                    </p>
                                    <h5>Coming Soon</h5>
                                    <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                    <div class="flex items-center justify-between">
                                        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                    <img src="{{ asset('img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
        
                                <div class="flex-auto px-1 pt-6">
                                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                        Project #3
                                    </p>
                                    <h5>Coming Soon</h5>
                                    <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                    <div class="flex items-center justify-between">
                                        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 4 -->
                        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                    <img src="{{ asset('img/comingsoon.jpg') }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
        
                                <div class="flex-auto px-1 pt-6">
                                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                        Project #4
                                    </p>
                                    <h5>Coming Soon</h5>
                                    <p class="mb-6 leading-normal text-sm">Will be Coming soon</p>
                                    <div class="flex items-center justify-between">
                                        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection