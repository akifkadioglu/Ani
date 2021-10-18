<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Remember extends Component
{
    public $remembrance = "";
    public $remembranceLength =  0;

    public function render()
    {
        $this->remembranceLength = Str::length($this->remembrance);
        if (old('remembrance') != "") {
            $this->remembrance = old('remembrance');
        }

        return view('livewire.remember');
    }
}