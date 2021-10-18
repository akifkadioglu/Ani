@extends('partials.master')
@section('title')
    Anı | {{ $data->username }}
@endsection
@section('content')
    <div class="container">
        <div class="card mb-4 p-3">
            <div class="container">
                <div class="navbar">
                    <div class="baslik">
                        {{ $data->name }}
                    </div>
                    @auth
                        @if ($data->id == Auth::user()->id)
                            <div>
                                <a href="{{ route('editform', $data->username) }} ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-wrench" viewBox="0 0 16 16">
                                        <path
                                            d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z" />
                                    </svg>
                                </a>
                            </div>
                        @endif
                    @endauth
                </div>
                <small class="username text-muted">
                    {{ $data->username }}
                </small>
                <hr>
                <div>
                    {!! $data->description !!}
                </div>
            </div>
        </div>

        @livewire('account', ["data" => $data])
    </div>
@endsection
<style>
    .icerik {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        color: black;
    }

    .baslik {
        font-size: 20px;
        font-weight: bolder;
        color: rgb(0, 0, 0);
        transition-duration: 0.5s;
    }

    button {
        transition-duration: 0.2s;
        border: 0;
        padding: 10px;
        background-color: white;
        font-weight: bolder;
    }

    button:hover {
        background-color: red;
        color: white;
    }

    .arala {
        padding-bottom: 100px;
    }

</style>
