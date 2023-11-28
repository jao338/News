<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class NewController extends Controller{
    
    public function index(){

        $lastNotices = Notice::orderBy('id', 'DESC')->paginate(4);; //  Pega os registros ordenaos pelo último

        $allNotices = Notice::all();

        $lastNotice = Notice::latest('id')->first();    //  Ordena pelo último e pega o primeiro registro

        return view('welcome', ['allNotices' => $allNotices, 'lastNotices' => $lastNotices ,'lastNotice' => $lastNotice]);
    }

    public function create(){
        return view('news/create');
    }

    public function store(Request $request){

        $notice = new Notice();

        $notice->title = $request->title;
        $notice->topic = json_encode($request->topics);
        $notice->themes = json_encode($request->themes);
        $notice->date = $request->date;

        //  Verifica se existe um input do tipo file e se ele é válido
        if($request->hasFile('img') && $request->file('img')->isValid()){

            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/news'), $imageName);

            $notice->img = $imageName;

        }

        $notice->save();

        return redirect('/')->with('msg', "Noticia criada com sucesso!");
    }

    public function show($id){

        $notice = Notice::findOrFail($id);

        return view('news/show', ['notice' => $notice]);

    }
}