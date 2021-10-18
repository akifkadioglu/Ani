<?php

namespace App\Http\Livewire;

use App\Models\Remembrance;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search = "";
    public function render()
    {
        $remembrances = Remembrance::where("title", 'LIKE', "%" . $this->search . "%")->inRandomOrder()->limit(5)->get();
        $users = User::where("username", 'LIKE', "%" . $this->search . "%")->inRandomOrder()->limit(5)->get();

        return view('livewire.search', [
            "data" => $remembrances,
            "users" => $users,
        ]);
    }
}
