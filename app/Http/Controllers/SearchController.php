<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $candies = Candy::where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('color', 'like', '%' . $searchTerm . '%')
                        ->get();

                        return view('layouts.search-results', compact('candies'));
    }

}
