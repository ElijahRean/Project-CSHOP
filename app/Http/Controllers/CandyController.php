<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    function index()
    {
        $data = Candy::all();
        return view('candy',['candies' => $data]);
    }
}
