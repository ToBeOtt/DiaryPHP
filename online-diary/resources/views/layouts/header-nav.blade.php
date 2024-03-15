<nav class="grid grid-cols-3 fixed top-0 w-full shadow-sm z-10 bg-[#313E34] border-b-2 border-[#283132]">
   
    <section class="col-span-1 flex justify-center items-center">
        <a 
            href="{{ route('diary.index') }}" 
            class="btn btn-primary mx-5 text-sm font-mono text-stone-300 tracking-widest mx-5 hover:text-zinc-500">
            home
        </a>
        <a 
            href="{{ route('diary.messages.generatePost') }}" 
            class="btn btn-primary mx-5 text-sm font-mono text-stone-300 tracking-widest mx-5 hover:text-zinc-500">
            new post
        </a>
    </section>
    <section class="col-span-1">
    </section>
    <section class="col-span-1 flex justify-end items-center mx-10">
         @auth
         <!-- If user is logged in, show logout button -->
         <form method="POST" action="{{ route('logout') }}">
             @csrf
             <button 
                type="submit" 
                class="btn btn-primary mx-5 text-sm font-mono text-stone-300 tracking-widest mx-5 hover:text-zinc-500">
                logout
            </button>
         </form>
         @endauth
    </section>
     
 </nav>