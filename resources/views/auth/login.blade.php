@extends('layouts.guest')

@section('title', 'Voting System - Login')

@section('content')
    <div class="p-4 min-h-screen flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md dark:border dark:bg-gray-800 dark:border-gray-700">
            <div class="font-medium self-center text-xl sm:text-2xl dark:text-white ">
                {{ __('Sign in to your account') }}
            </div>

            <div class="mt-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{-- EMAIL INPUT --}}
                    <div class="flex flex-col mb-6">
                        <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide font-medium dark:text-white">{{ __('Your email') }}</label>
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <input id="email" type="email" name="email" class="pl-10 pr-4 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">           
                        </div>
                    </div>
                    {{-- PASSWORD INPUT --}}
                    <div class="flex flex-col mb-6">
                        <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide font-medium dark:text-white">{{ __('Password') }}</label>
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input id="password" type="password" name="password" class="pl-10 pr-4 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••">
                        </div>
                    </div>
                    <div class="flex items-center justify-between my-5">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                            Forgot password?
                        </a>
                    </div>
                    {{-- SUBMIT BUTTON --}}
                    <div class="flex w-full">
                        <button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2">{{ __('Sign in') }}</span>
                            <i class="fa-regular fa-circle-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex mt-6">
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                {{ __("Don't have an account yet?") }}
                <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                {{ __('Sign up') }}
                </a>
            </p>
            </div>
        </div>
    </div>
@endsection