@extends('layouts.guest')

@section('title', 'Voting System - Reset Password')

@section('content')
<div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-xl px-5 text-center">
        <h2 class="mb-2 text-[42px] font-bold text-white">{{ __('Check your inbox')}} </h2>
        <p class="mb-2 text-lg text-white">{{ __("We are glad, that you're with us ? We've sent you a verification link to the email address")}} <span class="font-medium text-blue-700">{{$email}}</span></p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="mt-3 inline-block w-96 rounded bg-blue-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-blue-700">
                {{ __('Resend Verification Email →') }}
            </button>
        </form>
    </div>
</div>
@endsection

