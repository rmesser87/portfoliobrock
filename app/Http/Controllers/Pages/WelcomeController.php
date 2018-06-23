<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Serve up the index of my site
     * @method Index
     * @return view
     */
    //a public function in php is available to items outside of my class
    public function index(){
        $site_title = "My awesome portfolio";
        return view("welcome", compact("site_title"));
    }
}
