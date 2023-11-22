<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class NewController extends Controller{
    
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('news/create');
    }

    public function store(Request $request){


        
    }
}
