@extends('partials.master')
@section('title')
    ANI | Kayıt
@endsection

@section('content')


    <div class="container arala">
        <div class="ortala mb-4">
            <div class="baslik">ANI</div> KAYIT
        </div>
        <form action="{{ route('signup') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6 bosluk"><input type="text" value="{{ old('email') }}" class="form-control"
                        name="email" placeholder="E-mail" required></div>
                <div class="col-sm-6 bosluk"><input type="password" value="{{ old('password') }}" class="form-control"
                        name="password" placeholder="Şifre" required></div>
                <div class="col-sm-6 bosluk"><input type="text" value="{{ old('username') }}" class="form-control"
                        name="username" placeholder="Kullanıcı Adı" required></div>
                <div class="col-sm-6 bosluk"><input type="text" value="{{ old('name') }}" class="form-control"
                        name="name" placeholder="İsim" required></div>
                <div class="col-sm-12 bosluk"><textarea class="form-control" name="description" cols="30" rows="5"
                        placeholder="Merhaba Anı'daki yeni insan! Bize biraz kendinden bahsetmek ister misin? :)">{{ old('description') }}</textarea>
                </div>
                <div style="width: 100%" class="butonyer"><button class="buton">gönder</button></div>
            </div>
        </form>
    </div>

@endsection




{{-- ############################################################ css ############################################################ --}}
<style>
    .arala {
        padding-top: 100px;
        padding-bottom: 100px
    }

    .ortala {
        text-align: center;
    }

    .bosluk {
        padding-bottom: 15px;
    }

    .butonyer {
        padding-top: 10px;
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
