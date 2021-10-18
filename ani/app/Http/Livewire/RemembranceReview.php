<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class RemembranceReview extends Component
{
    public $data;
    public $veriler;

    public function justuser()
    {
        $this->veriler = Review::where('user_id', $this->data->user_id)->where('remembrance_id', $this->data->id)->get();
    }
    public function alluser()
    {
        $this->veriler = Review::where('remembrance_id', $this->data->id)->get();
    }
    public function mount()
    {
        $this->veriler = Review::where('remembrance_id', $this->data->id)->get();
    }
    public function render()
    {
        return view('livewire.remembrance-review');
    }
}
