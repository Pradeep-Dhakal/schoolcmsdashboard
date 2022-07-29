<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class PageController extends Controller
{
    public function about($title){
        $about=About::all()->where('title',$title)->first();
        return view('user.all_about', compact('about'));
    }

}
