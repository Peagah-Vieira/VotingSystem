@extends('layouts.app')

@section('title', 'Voting System - Profile')   

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
            <a href="{{route('profile')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">
                Profile
            </a>
            </div>
        </li>
    </ol>
  </nav>
@endsection

@section('content')
    <div class="w-full px-6 py-6 mx-auto text-slate-500">
        <!-- Profile Header -->
        <div class="relative flex flex-col flex-auto min-w-0 p-4 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border mb-4">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="{{ asset('img/pessoalinda.jpeg') }}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl">
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">Username</h5>
                        <p class="mb-0 font-semibold leading-normal text-size-sm">name@company.com</p>
                        <form action="" method="POST">
                          @csrf
                          <button type="submit" class="font-bold text-red-400 hover:text-red-600">
                            Delete Account
                          </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="flex flex-wrap my-6 -mx-3">
            <!-- card 1 -->
            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
              <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                  <div class="flex flex-wrap mt-0 -mx-3">
                    <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                      <h6>Projects</h6>
                      <p class="mb-0 leading-normal text-sm">
                        <i class="fa fa-check text-cyan-500"></i>
                        <span class="ml-1 font-semibold">30 done</span>
                        this month
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                  <div class="overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                      <thead class="align-bottom">
                        <tr>
                          <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Companies</th>
                          <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Members</th>
                          <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Budget</th>
                          <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Completion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-xd.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Soft UI XD Version</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-1.jpg') }}" class="w-full rounded-full" alt="team1" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Ryan Tompson
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-2.jpg') }}" class="w-full rounded-full" alt="team2" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Romina Hadid
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-3.jpg') }}" class="w-full rounded-full" alt="team3" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Alexander Smith
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-4.jpg') }}" class="w-full rounded-full" alt="team4" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Jessica Doe
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> $14,000 </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">60%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-atlassian.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="atlassian" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Add Progress Track</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-2.jpg') }}" class="w-full rounded-full" alt="team5" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Romina Hadid
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-4.jpg') }}" class="w-full rounded-full" alt="team6" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Jessica Doe
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> $3,000 </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">10%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-slack.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="team7" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Fix Platform Errors</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-3.jpg') }}" class="w-full rounded-full" alt="team8" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Romina Hadid
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-1.jpg') }}" class="w-full rounded-full" alt="team9" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Jessica Doe
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> Not set </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">100%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-spotify.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="spotify" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Launch our Mobile App</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-3.jpg') }}" class="w-full rounded-full" alt="user1" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Ryan Tompson
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-2.jpg') }}" class="w-full rounded-full" alt="user2" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Romina Hadid
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-4.jpg') }}" class="w-full rounded-full" alt="user3" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Alexander Smith
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-1.jpg') }}" class="w-full rounded-full" alt="user4" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Jessica Doe
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> $20,500 </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">100%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-jira.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="jira" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Add the New Pricing Page</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-4.jpg') }}" class="w-full rounded-full" alt="user5" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Ryan Tompson
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> $500 </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">25%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                            <div class="flex px-2 py-1">
                              <div>
                                <img src="{{ asset('img/small-logos/logo-invision.svg') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="invision" />
                              </div>
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">Redesign New Online Shop</h6>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                            <div class="mt-2 avatar-group">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-1.jpg') }}" class="w-full rounded-full" alt="user6" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Ryan Tompson
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                <img src="{{ asset('img/team-4.jpg') }}" class="w-full rounded-full" alt="user7" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" role="tooltip">
                                Jessica Doe
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-0 text-sm whitespace-nowrap">
                            <span class="font-semibold leading-tight text-xs"> $2,000 </span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                            <div class="w-3/4 mx-auto">
                              <div>
                                <div>
                                  <span class="font-semibold leading-tight text-xs">40%</span>
                                </div>
                              </div>
                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- card 2 -->
            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                      <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-12 sm:col-span-12">
                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                              <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Bonnie" required="">
                          </div>
                          <div class="col-span-12 sm:col-span-12">
                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                              <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg     block w-full p-2.5" placeholder="example@company.com" required="">
                          </div>
                          <div class="col-span-12 sm:col-span-12">
                              <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900">Current Password</label>
                              <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="••••••••" required="">
                          </div>
                          <div class="col-span-12 sm:col-span-12">
                              <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">New Password</label>
                              <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="••••••••" required="">
                          </div>
                      </div>
                      <div class="flex items-center pt-5 space-x-2 rounded-b border-t border-gray-200">
                        <button type="submit" class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save all</button>
                    </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection