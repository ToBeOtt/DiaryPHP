@extends('layouts.app')

@section('content')
    <h1 class="text-lg font-mono text-stone-200 mx-10 p-5">Edit Diary Message</h1>

    <form 
        method="POST" 
        action="{{ route('diary.messages.update', $diary->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <input 
                type="text" 
                class="form-control w-[35vw] p-1 rounded-sm border border-black" 
                id="title" 
                name="title" 
                value="{{ $diary->title }}">
        </div>

        <div class="mb-3">
            <textarea 
                class="form-control w-[50vw] p-1 rounded-sm border border-black" 
                id="text" 
                name="text" 
                rows="10">{{ $diary->text }}</textarea>
        </div>

        <button 
            type="submit" 
            class="btn btn-primary text-sm font-mono text-stone-300 mx-3">
            Save Changes
        </button>
    </form>
@endsection