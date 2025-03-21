<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $query = request('q'); // Get the search query from the request
        $courses = Course::where('course', 'LIKE', '%' . $query . '%')->get(); 

        return view('results', [
            'courses' => $courses, 
            'query' => $query, // Pass the query to the view
        ]); 
    }
}
