<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    //  一覧ページ
     public function index() {        
        return view('posts.index');
    }
}
