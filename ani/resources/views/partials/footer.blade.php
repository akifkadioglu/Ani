@php
$user = Auth::user();
@endphp

@auth
    <button class="addremembrance" onclick="event.preventDefault(); document.getElementById('addRemembrance').submit()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
            viewBox="0 0 16 16">
            <path
                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
        </svg>
    </button>
    <form id="addRemembrance" action="{{ route('remembranceform') }}" method="GET" style="display: none">
        @csrf
    </form>
@endauth



<footer style="background-color: black;" class="navbar footer">
    <div style="width: 100%;">
        <div class="ortala text-light">
            @auth
                Bize anılarından bahset {{ $user['name'] }}
            @endauth
            @guest
                Belki rüyalarınız, belki anılarınız..

            @endguest
        </div>
    </div>
</footer>

{{-- ################################################################# css ################################################################# --}}
<style>
    .ortala {
        text-align: center;
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 40px;
    }

    .addremembrance {
        position: fixed;
        bottom: 0;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 20px;
        padding-bottom: 35px;
        height: 40px;
        border-radius: 100%;
        margin-bottom: 150px;
        margin-left: 86%;
        background-color: white;
        border: 1px solid black;
        transition-duration: 0.3s;
    }

    .addremembrance:hover {
        background-color: rgb(255, 179, 179);
        font-weight: bolder;
    }

</style>
