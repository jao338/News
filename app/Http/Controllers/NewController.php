<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;

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

        $user = auth()->user();

        $request->validate([
           'title' => 'required|string|max:255',
        //    'topics' => 'required|json',
        //    'themes' => 'required|json',
           'date' => 'required|date',
           'img' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $notice->title = $request->title;
        $notice->topic = json_encode($request->topics);
        $notice->themes = json_encode($request->themes);
        $notice->date = $request->date;
        $notice->user_id = $user->id;

        //  Verifica se existe um input do tipo file e se ele é válido
        if($request->hasFile('img') && $request->file('img')->isValid()){

            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/news'), $imageName);

            // $requestImage->storeAs('public', $imageName);

            $notice->img = $imageName;

        }

        $notice->save();

        return redirect('/')->with('msg', "Noticia criada com sucesso!");
    }

    public function show($id){

        $notice = Notice::findOrFail($id);

        $user = User::where('id', $notice->user->id)->first();

        return view('news/show', ['notice' => $notice, 'user' => $user]);

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

    public function destroy($id){

        if(!$notice = Notice::find($id)){
            return redirect()->back();  //  Caso não encontre o registro, redireciona de volta para a página anterior
        }

        $notice->delete();

        return redirect('/')->with('msg', "Noticia exluida com sucesso");
    }

    public function search(Request $request){

        $search = Notice::whereJsonContains("themes", $request->inputSearch)->
                                        orWhere('title', 'LIKE', "%{$request->inputSearch}%")->paginate();
        
        return view('welcome', ['search' => $search, 'input' => $request->inputSearch]);
    }

    public function dashboard(){

        $user = auth()->user();

        $notices = $user->notices;

        return view('dashboard', ['notices' => $notices]);

    }
}