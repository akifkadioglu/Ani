@extends('partials.master')
@section('title')
    Düzenle | {{ $remembrancedata->title }}
@endsection

@section('content')

    <div>
        <div class="container arala">
            <div class="ortala mb-4">
                <div class="baslik">ANI</div> Düzenle
            </div>
            <form action="{{ route('editremembrance', $remembrancedata->id) }} " method="POST">
                @csrf
                <div class="form-group">
                    <div>
                        <input type="text" placeholder="Başlık" value="{{ $remembrancedata->title }}" name="title"
                            class="form-control">
                    </div>
                    <div class="pt-4">
                        <textarea class="form-control" maxlength="65535" placeholder="Anınız" name="remembrance" cols="30"
                            rows="15"></textarea>
                        <p class="card my-3 p-3">
                            {!! $remembrancedata->remembrance !!}
                        </p>

                    </div>
                    <div style="width: 100%" class="butonyer pb-5"><button class="buton">düzenle</button></div>
                </div>
            </form>
        </div>

    </div>
@endsection


{{-- ############################################################ css ############################################################ --}}

<style>
    .ortala {
        text-align: center;
    }

    .arala {
        padding-top: 100px
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
