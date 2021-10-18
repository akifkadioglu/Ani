<div class="arala">
    <nav class="navbar" style="text-align:center">
        <div wire:click="myremembrance"><button style="border-radius:10px">Yazılan anılar</button></div>
        <div wire:click="remembrances"><button style="border-radius:10px">Takiplenen anılar</button></div>
        <div wire:click="reviews"><button style="border-radius:10px">Yazılan yorumlar</button></div>
    </nav>
    @if ($eger == 0)
        @if (count($veriler) > 0)
            <div style="text-align: center; font-size:30px;color:rgb(184, 0, 0)" class="mb-3">
                Yazılan anılar
            </div>
            <hr>
        @endif
        @foreach ($veriler as $item)
            <div class="card mb-3 p-5"><a href="{{ route('ani', $item->slug) }}" class="nav-link"
                    style="font-size: 20px">{{ $item->title }}</a>
                <div class="icerik p-3">
                    {!! $item->remembrance !!}
                </div>
            </div>
        @endforeach
    @endif
    @if ($eger == 1)

        @if (count($veriler) > 0)
            <div style="text-align: center; font-size:30px;color:rgb(184, 0, 0)" class="mb-3">
                Yazılan yorumlar
            </div>
            <hr>
        @endif

        @foreach ($veriler as $item)
            <div class="card mb-3 p-5">
                <a href="{{ route('ani', $item->remembrance->slug) }}" class="nav-link"
                    style="font-size: 20px">{{ $item->remembrance->title }}</a>
                <div class="icerik p-3">
                    {!! $item->review !!}
                </div>
            </div>
        @endforeach
    @endif
    @if ($eger == 2)

        @if (count($veriler) > 0)
            <div style="text-align: center; font-size:30px;color:rgb(184, 0, 0)" class="mb-3">
                Takiplenen anılar
            </div>
            <hr>

        @endif
        @foreach ($veriler as $item)
            <div class="card mb-3 p-5"><a href="{{ route('ani', $item->remembrance->slug) }}" class="nav-link"
                    style="font-size: 20px">{{ $item->remembrance->title }}</a>
                <div class="icerik p-3">
                    {!! $item->remembrance->remembrance !!}
                </div>
            </div>
        @endforeach
    @endif
</div>
