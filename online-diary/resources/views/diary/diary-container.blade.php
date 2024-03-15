
@foreach ($diaryMessages as $diaryMessage)
<section class="grid grid-rows-4 border border-black shadow-lg rounded-s-lg m-10 p-2 bg-[#BAC1BC]"> 
    {{-- bg-[#BAC1BC] bg-gradient-to-r from-[#BAC1BC] to-[#707D73] to-90%"> --}}
    <div class="row-span-1">
        <section class="grid grid-cols-2">
            <p class="col-span-1 italic text-xs flex m-1">Date posted: {{ $diaryMessage->date_created }}</p>
            
            <div class="col-span-1 flex justify-end items-center"> 
                <div class="mx-3">
                    <form action="{{ route('diary.messages.edit', ['diary' => $diaryMessage->id]) }}" method="GET">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-link p-0 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </form>
                </div>
                
                <div class="mx-3">

                    <form action="{{  route('diary-messages.delete', ['id' => $diaryMessage->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-link p-0 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg"width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div> 

    <div class="row-span-1">
        <h1 class="text-lg font-mono text-stone-500 mx-7 pt-2">{{ $diaryMessage->title }}</h1>
    </div> 

    <div class="row-span-2 mx-10">
        <p>{{ $diaryMessage->text }}</p>
    </div>

</section>
   
@endforeach