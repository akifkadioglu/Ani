@extends('partials.master')
@section('title')
    ANI | Giriş
@endsection

@section('content')


    <div class="container arala">
        <div class="ortala mb-4">
            <div class="baslik">ANI</div> Giriş
        </div>
        <form action="{{ route('loginform') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6 bosluk"><input type="text" class="form-control" name="email" placeholder="E-mail"
                        required></div>
                <div class="col-sm-6 bosluk"><input type="password" class="form-control" name="password" placeholder="Şifre"
                        required></div>

                <div style="width: 100%" class="butonyer"><button class="buton">Giriş Yap</button></div>
            </div>
        </form>
    </div>

@endsection

{{-- ############################################################ css ############################################################ --}}
<style>
    .arala {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .ortala {
        text-align: center;
    }

    .bosluk {
        padding-bottom: 15px;
    }

    .butonyer {
        text-align: end;
        width: 100%;
    }

    .buton {
        border: 1px solid rgb(0, 83, 49);
        padding: 10px;
        padding-left: 15px;
        padding-right: 15px;
        transition-duration: 0.2s;
        background-color: white;
        border-radius: 10px;
        font-weight: bolder;
    }

    .buton:hover {
        background-color: rgb(0, 83, 49);
        color: rgb(255, 255, 255);
        border: 2px solid rgb(255, 255, 255);
        box-shadow: 0px 0px 10px rgb(0, 83, 49);
    }

    .baslik {
        font-weight: bolder;
        font-size: 50px;
    }

</style>
