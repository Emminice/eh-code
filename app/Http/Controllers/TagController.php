<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('results', ['courses' => $tag->courses]); 
    }
} 
 
