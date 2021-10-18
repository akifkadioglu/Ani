<?php

namespace App\Http\Controllers;

use App\Models\Remembrance;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function addReview($id)
    {
        $data = new Review();
        $data->user_id = Auth::user()->id;
        $data->remembrance_id = $id;
        $data->review = nl2br(request('review'));
        $data->save();
        return redirect()->back()->with('message', 'yorum başarıyla eklendi')->with('message_type', 'success');
    }

    public function delete($id)
    {
        Review::where('id', $id)->delete();
        return redirect()->back()->with('message', 'yorum başarıyla silindi')->with('message_type', 'success');
    }
}
