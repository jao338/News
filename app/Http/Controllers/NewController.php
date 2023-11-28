<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Faker\Provider\Lorem;
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

    public function edit($id){

        if(!$notice = Notice::find($id)){
            return redirect()->back();  //  Caso não encontre o registro, redireciona de volta para a página anterior
        }
        
        return view('news/edit', compact('notice'));

    }

    public function update(Request $request, $id){

        if(!$notice = Notice::find($id)){
            return redirect()->back();  //  Caso não encontre o registro, redireciona de volta para a página anterior
        }

        $data = $request->all();

        $data['topic'] = json_encode($request->topic);
        $data['themes'] = json_encode($request->themes);

        if($request->hasFile('img') && $request->file('img')->isValid()){

            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/news'), $imageName);

            $data['img'] = $imageName;

        }

        
        $notice->update($data);

        return redirect('/')->with('msg', "Noticia atualizada com sucesso");

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

            $requestImage->storeAs('posts', $imageName);   //  É feito o upload da imagem para o storage, que possui um link simbólico que aponta a para pasta 'public'

            $notice->img = $imageName;

        }

        $notice->save();

        return redirect('/')->with('msg', "Noticia criada com sucesso!");
    }

    public function show($id){

        $notice = Notice::findOrFail($id);

        return view('news/show', ['notice' => $notice]);

    }

    public function destroy($id){

        if(!$notice = Notice::find($id)){
            return redirect()->back();  //  Caso não encontre o registro, redireciona de volta para a página anterior
        }

        
        $notice->delete();

        return redirect('/')->with('msg', "Noticia exluida com sucesso");

    }
}