@extends('layouts.guest')

@section('title', 'Voting System - Reset Password')

@section('content')
<div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-white">
    <div class="max-w-xl px-5 text-center">
        <h2 class="mb-2 text-[42px] font-bold text-zinc-800">{{ __('Check your inbox')}} </h2>
        <p class="mb-2 text-lg text-zinc-500">{{ __("We are glad, that you're with us ? We've sent you a verification link to the email address")}} <span class="font-medium text-indigo-500">{{$email}}</span></p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="mt-3 inline-block w-96 rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">
                {{ __('Resend Verification Email →') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">
                {{ __('↩ Log Out') }}
            </button>
        </form>
    </div>
</div>
@endsection

<script>
    @if(Session::has('status') == 'verification-link-sent')
        {{Toastr::success('A new verification link has been sent to the email address', 'Mail')}}
    @endif
</script>

