<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosCotroller extends Controller
{
    public function index() {
      return view('todos.index');
      
    }
}
