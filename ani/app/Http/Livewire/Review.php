<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Review extends Component
{
    public $review = "";
    public $reviewlength = 0;
    public $data;

    public function render()
    {
        if (old('reivew') != '') {
            $this->review = old('reivew');
        }
        $this->reviewlength = Str::length($this->review);
        return view('livewire.review');
    }
}
