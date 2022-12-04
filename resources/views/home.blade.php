@extends('layouts.default')
<script>
    @if(Session::has('loginSuccess'))
        {{Toastr::success('Login Successfully!', 'Success')}}
    @endif
</script>