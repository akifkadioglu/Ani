<?php

namespace App\Http\Livewire;

use App\Models\Remembrance;
use App\Models\RemembranceData;
use Livewire\Component;
use App\Models\Review;


class Account extends Component
{

    public $veriler;
    public $data;
    public $eger;

    public function myremembrance()
    {
        $this->veriler =  Remembrance::where('user_id', $this->data->id)->orderByDesc('created_at')->limit(50)->get();
        $this->eger = 0;
    }
    public function remembrances()
    {
        $this->veriler =   RemembranceData::where('user_id', $this->data->id)->where('save', true)->orderByDesc('created_at')->limit(50)->get();;
        $this->eger = 2;
    }
    public function reviews()
    {
        $this->veriler =  Review::where('user_id', $this->data->id)->orderByDesc('created_at')->limit(50)->get();
        $this->eger = 1;
    }

    public function mount()
    {
        $this->veriler =  Remembrance::where('user_id', $this->data->id)->orderByDesc('created_at')->limit(50)->get();
        $this->eger = 0;
    }
    public function render()
    {
        return view('livewire.account');
    }
}
