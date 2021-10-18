<?php

namespace App\Http\Controllers;

use App\Models\Remembrance;
use App\Models\RemembranceData;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function remembrance()
    {
        return Remembrance::all();
    }
    public function remembrancedata()
    {
        return RemembranceData::all();
    }
    public function user()
    {
        return User::all();
    }
    public function review()
    {
        return Review::all();
    }
}
