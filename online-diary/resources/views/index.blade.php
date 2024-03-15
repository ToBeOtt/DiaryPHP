@extends('layouts.app')

@section('Varbi diary', 'Index Page')

@section('content')

    <h1 class="text-2xl font-mono font-black text-stone-300 tracking-widest mx-5">
        My diary
    </h1>
    @if(session('success'))
        <div class="alert alert-success text-sm italic m-5 text-stone-300">
            {{ session('success') }}
        </div>
    @endif
    
    @include('diary.diary-container', ['diaryMessages' => $diaryMessages])
        
@endsection
