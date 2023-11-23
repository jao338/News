<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class NewController extends Controller{
    
    public function index(){

        $allNotices = Notice::latest('id'); //  Pega os registros ordenaos pelo último

        $lastNotice = Notice::latest('id')->first();    //  Ordena pelo último e pega o primeiro registro

        return view('welcome', ['allNotices' => $allNotices, 'lastNotice' => $lastNotice]);
    }

    public function create(){
        return view('news/create');
    }

    public function store(Request $request){

        $notice = new Notice();

        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->date = $request->date;

        $notice->save();

        return redirect('/')->with('msg', "Noticia criada com sucesso!");
    }

    public function show($id){

        $notice = Notice::findOrFail($id);

        return view('news/show', ['notice' => $notice]);

    }
}