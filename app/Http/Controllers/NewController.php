<?php

namespace App\Http\Controllers;

use App\Models\Notice;
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

        $notice = new Notice();

        // dd($request);

        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->date = $request->date;

        $notice->save();

        return redirect('/')->with('msg', "Noticia criada com sucesso!");
        
    }
}
