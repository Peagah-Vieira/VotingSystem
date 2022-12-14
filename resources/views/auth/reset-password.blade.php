@extends('layouts.guest')

@section('title', 'Voting System - Reset Password')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
        <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">
            {{ __('Reset Password') }}
        </div>
        <div class="mt-10">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                {{-- PASSWORD RESET TOKEN --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                {{-- EMAIL INPUT --}}
                <div class="flex flex-col mb-6">
                    <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">{{ __('E-Mail Address:') }}</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <i class="fa-solid fa-at"></i>
                        </div>
                        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="E-Mail Address" />
                    </div>
                </div>

                {{-- PASSWORD INPUT --}}
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">{{ __('Password:') }}</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input id="password" type="password" name="password" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Password">
                    </div>
                </div>

                {{-- CONFIRM PASSWORD INPUT --}}
                <div class="flex flex-col mb-6">
                    <label for="password-confirm" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">{{ __('Confirm Password:') }}</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input id="password-confirm" type="password" name="password_confirmation" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Confirm password">
                    </div>
                </div>

                <div class="flex w-full">
                    <button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                    <span class="mr-2 uppercase">{{ __('Reset Password') }}</span>
                        <i class="fa-regular fa-circle-right"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a href="{{route('login')}}" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">
                <i class="fa-solid fa-left-long"></i>
            <span class="ml-2">{{ __('Back to login page') }}</span>
            </a>
        </div>
        </div>
    </div>
@endsection

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{Toastr::error($error, 'Something went wrong!')}}
        @endforeach
    @endif
</script>