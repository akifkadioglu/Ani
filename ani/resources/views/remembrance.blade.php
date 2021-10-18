@extends('partials.master')
@section('title')
    Anı | {{ $data->title }}
@endsection
@section('content')
    <div class="container arala">
        <div class="card mb-4 p-3">
            <div class="container">
                <div class="baslik">
                    {{ $data->title }}
                    @auth
                        @if ($data->user_id == Auth::user()->id || Auth::user()->admin == true)
                            <nav class="navbar">
                                <a href="{{ route('editremembranceform', $data->slug) }} " class="nav-link"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-wrench" viewBox="0 0 16 16">
                                        <path
                                            d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z" />
                                    </svg></a>
                                <a href="{{ route('sil', $data->id) }} " class="nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path
                                            d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                    </svg></a>
                            </nav>
                        @endif
                    @endauth

                </div>
                <div>
                    {!! $data->remembrance !!}
                </div>
                <p style="text-align: end; font-size:20px;"> <a style="text-decoration:none;color:rgb(204, 0, 0);"
                        href="{{ route('account', $data->user->username) }}">{{ $data->user->username }}</a> </p>

            </div>
        </div>
        @livewire('movements', ['remembrancedata' => $remembrancedata, "data" => $data])
        @if (count($reviews) > 0)
            <hr>
        @endif
        @auth
            @livewire('review', ["data" => $data])
        @endauth

        @livewire('remembrance-review', ["data" => $data])
    </div>
@endsection

<style>
    div.review {
        font-weight: bolder;
        font-size: 20px;
        padding-bottom: 10px;
    }

    .baslik {
        font-size: 30px;
        font-weight: bolder;
        color: rgb(204, 0, 0);
        transition-duration: 0.5s;
        text-align: center;

    }

    button {
        background-color: rgba(255, 255, 255, 0);
        border: 0px;
    }

    button.like {
        transition-duration: 0.3s;
    }

    button.choice {
        transition-duration: 0.3s;
        font-weight: bolder;
        padding: 15px;
    }

    button.review {
        transition-duration: 0.3s;
        border-radius: 5px;
        padding: 5px;
        border: 1px solid black;
    }

    button.save {
        transition-duration: 0.3s;
    }

    button.like:hover {
        color: rgb(0, 191, 255);
    }

    button.choice:hover {
        color: rgb(255, 255, 255);
        background-color: mediumslateblue;
        border-radius: 10px;
    }

    button.review:hover {
        color: rgb(81, 255, 0);
    }

    button.save:hover {
        color: red;
    }

    .arala {
        padding-bottom: 100px;
    }

</style>
