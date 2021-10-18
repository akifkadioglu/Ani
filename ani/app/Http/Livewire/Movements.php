<?php

namespace App\Http\Livewire;

use App\Models\RemembranceData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Movements extends Component
{
    public $like = 0;
    public $dislike = 0;
    public $save = 0;

    public $liked = 0;
    public $disliked = 0;
    public $saved = 0;

    public $remembrancedata;
    public $data;

    public function like()
    {
        $test = RemembranceData::where('user_id', Auth::user()->id)->where('remembrance_id', $this->data->id)->first();
        if (!$test) {
            $data = new RemembranceData();

            $data->like = true;
            $data->save = false;

            $data->ilike = true;
            $data->isave = false;

            $data->user_id = Auth::user()->id;
            $data->remembrance_id = $this->data->id;
            $data->save();

            $this->liked = $this->liked + 1;
        } else {

            if ($test->ilike) {

                $test->like = !$test->like;
                $test->save = $test->save;

                $test->ilike = !$test->ilike;
                $test->isave = $test->isave;

                $test->user_id = Auth::user()->id;
                $test->remembrance_id = $this->data->id;
                $test->save();

                $this->liked = $this->liked - 1;
            } else {

                $test->like = !$test->like;
                $test->save = $test->save;

                $test->ilike = !$test->ilike;
                $test->isave = $test->isave;

                $test->user_id = Auth::user()->id;
                $test->remembrance_id = $this->data->id;
                $test->save();

                $this->liked = $this->liked + 1;
            }
        }
    }


    public function save()
    {
        $test = RemembranceData::where('user_id', Auth::user()->id)->where('remembrance_id', $this->data->id)->first();
        if (!$test) {
            $data = new RemembranceData();
            $data->like = false;
            $data->save = true;

            $data->ilike = false;
            $data->isave = true;

            $data->user_id = Auth::user()->id;
            $data->remembrance_id = $this->data->id;
            $data->save();

            $this->saved = $this->saved + 1;
        } else {

            if ($test->save) {

                $test->like = $test->like;
                $test->save = !$test->save;

                $test->ilike = $test->ilike;
                $test->isave = !$test->isave;

                $test->user_id = Auth::user()->id;
                $test->remembrance_id = $this->data->id;
                $test->save();

                $this->saved = $this->saved - 1;
            } else {

                $test->like = $test->like;
                $test->save = !$test->save;

                $test->ilike = $test->ilike;
                $test->isave = !$test->isave;

                $test->user_id = Auth::user()->id;
                $test->remembrance_id = $this->data->id;
                $test->save();

                $this->saved = $this->saved + 1;
            }
        }
    }

    public function mount()
    {
        foreach ($this->remembrancedata as $key) {
            $this->like += $key->like;
        }
        foreach ($this->remembrancedata as $key) {
            $this->save += $key->save;
        }
        $this->liked = $this->like;
        $this->saved = $this->save;
    }
    public function render()
    {
        return view('livewire.movements');
    }
}
