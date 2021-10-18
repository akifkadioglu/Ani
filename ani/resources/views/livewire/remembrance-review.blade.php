<div>
    <div class="navbar">
        <button class="choice" wire:click="justuser">Başlığın sahibi</button>
        <button class="choice" wire:click="alluser">Tüm yorumlar</button>
    </div>


    @foreach ($veriler as $key => $item)
        {{ $key + 1 }}
        <div class="card mb-4 p-4">
            @auth
                @if ($item->user_id == Auth::user()->id || Auth::user()->admin == true)
                    <div class="navbar">
                        <div><input type='hidden' ></div>
                        <a style="text-align: end" href="{{ route('deleteReview', $item->id) }} " class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                            </svg></a>
                    </div>
                @endif
            @endauth


            <div class="icerik">
                {!! $item->review !!}
                <p style="text-align: end; font-size:20px;"> <a style="text-decoration:none;color:rgb(204, 0, 0);"
                        href="{{ route('account', $item->user->username) }}">{{ $item->user->username }}</a> </p>
            </div>
        </div>
    @endforeach
</div>
