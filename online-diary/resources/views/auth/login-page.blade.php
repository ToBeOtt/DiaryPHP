@extends('layouts.app')

@section('Varbi diary', 'Login')

@section('content')

    <h1 class="text-2xl font-mono font-black text-stone-300 tracking-widest m-5">
        Welcome to my diary
    </h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- CSRF Protection -->
        
        <!-- Username/Email -->
        <div>
            <label 
                for="username"
                class="text-sm text-stone-300"
                >Username or Email:
            </label><br>
            <input 
                type="text"
                class="w-[20vw] p-1 rounded-sm border border-black"
                id="email" 
                name="email" 
                required>
        </div>
        
        <!-- Password -->
        <div class="my-3">
            <label
                class="text-sm text-stone-300" 
                for="password">
                Password
            </label><br>
            <input 
                type="password" 
                class="w-[20vw] p-1 rounded-sm border border-black"
                id="password" 
                name="password" 
                required>
        </div>
        
        <!-- Submit Button -->
        <button 
            type="submit"
            class="btn btn-primary text-lg font-mono text-stone-300">
            Login >>
        </button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger text-sm italic m-5 text-stone-300">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

@endsection


