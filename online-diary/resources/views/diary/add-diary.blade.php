@extends('layouts.app')

@section('content')
    <h1 class="text-lg font-mono text-stone-200 mx-10 p-5">Add new diary post</h1>

    <form 
        method="POST" 
        action="{{ route('diary.messages.add') }}">
        @csrf
        @method('POST')

        <div class="mb-3">
            <input 
                type="text" 
                class="form-control w-[35vw] p-1 rounded-sm border border-black" 
                id="title" 
                name="title">
        </div>

        <div class="mb-3">
            <textarea 
                class="form-control w-[50vw] p-1 rounded-sm border border-black" 
                id="text" 
                name="text" 
                rows="4">
            </textarea>
        </div>

        <button 
            type="submit" 
            class="btn btn-primary text-sm font-mono text-stone-300 mx-3">
            Add post
        </button>
    </form>
@endsection