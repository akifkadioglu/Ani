<?php

namespace App\Http\Controllers;

use App\Models\Remembrance;
use App\Models\RemembranceData;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class remembranceController extends Controller
{
    public function remembranceform()
    {
        return view("remembrance.remembranceform");
    }

    public function remembrance()
    {
        $this->validate(request(), [
            'title' => 'required',
            "remembrance" => "required",
        ]);

        $data = new Remembrance();
        $data->title = request("title");
        $data->slug = Str::slug(request("title"), '-');
        if (count(Remembrance::where("slug", $data->slug)->get()) > 0) {
            $data->slug = Str::slug(request("title"), '-') . Str::random(15);
        }
        $data->remembrance = nl2br(request("remembrance"));
        $data->user_id = Auth::user()->id;
        $data->save();

        $movement = new RemembranceData();
        $movement->user_id = $data->user_id;
        $movement->remembrance_id = $data->id;
        $movement->like = 0;
        $movement->save = 0;
        $movement->save();

        if ($data) {
            return redirect()->route("home")->with("message", "datayı kaydettik")->with("message_type", "success");
        } else {
            return redirect()->route("home")->with("message", "datayı kaydedemedik")->with("message_type", "success");
        }
    }


    public function getRemember($slug)
    {
        $data = Remembrance::where("slug", $slug)->first();
        $remembrancedata = RemembranceData::where('remembrance_id', $data->id)->get();
        $reviews = Review::where('remembrance_id', $data->id)->get();

        return view("remembrance", ["data" => $data, 'remembrancedata' => $remembrancedata, 'reviews' => $reviews]);
    }



    public function editremembranceform($slug)
    {
        $remembrancedata = Remembrance::where('slug', $slug)->first();
        return view("remembrance.editremembrance", ['remembrancedata' => $remembrancedata, 'slug' => $slug]);
    }
    public function editremembrance($id)
    {
        $data = Remembrance::where("id", $id)->first();
        $data->title = request('title');
        $data->slug = Str::slug(request("title"), '-');
        if (count(Remembrance::where("slug", $data->slug)->get()) > 0) {
            $data->slug = Str::slug(request("title"), '-') . Str::random(15);
        }
        $data->remembrance = nl2br(request('remembrance'));
        $data->user_id = Auth::user()->id;

        $data->save();
        return redirect()->route('ani', $data->slug)->with('message', "$data->title güncellendi")->with('message_type', 'success');
    }
    public function delete($id)
    {
        Remembrance::where('id', $id)->delete();
        return redirect()->route('home')->with('message', 'Anınız silindi')->with('message_type', 'success');
    }
}
