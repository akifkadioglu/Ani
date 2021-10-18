@extends('partials.master')
@section('title')
    Anı | Anı Ekle
@endsection

@section('content')
    @livewire('remember')
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
