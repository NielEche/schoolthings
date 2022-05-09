@extends('layouts.app')

@section('title')
LOGIN
@endsection

@section('content')

    <x-jet-validation-errors class="mb-4" />
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    
    <section class="section pb-2">
        <div class="container  border-dark py-4 px-5" style=" border-width: 4px;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" style=" border-width: 4px;"  type="email" name="email" :value="old('email')" required autofocus />
                </div>
        
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full bg-transparent border-bottom border-dark shadow-none" style=" border-width: 4px;" type="password" name="password" required autocomplete="current-password" />
                </div>
        
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    
                 
                    <button class="ml-4 btn btn-light rounded-0 border-dark"  style="font-family:'Poppins' !important; letter-spacing: 0em !important; border-width: 4px">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
