<div>
    <div class="dropdown">
        <span><input type="text" class="input" wire:model="search" placeholder="Kişi ya da Anı ara"></span>
        <div class="dropdown-content" style="text-align: center">
            @foreach ($users as $item)
                <p><a href="{{ route('account', $item->username) }} "
                        style="color: black; text-decoration: none">{{ $item->username }}</a></p>
            @endforeach

            <p style="background-color: red"><br></p>

            @foreach ($data as $item)
                <p>
                    <a href="{{ route('ani', $item->slug) }} "
                        style="color: black; text-decoration: none">{{ $item->title }}</a>
                </p>
            @endforeach
        </div>
    </div>
</div>
