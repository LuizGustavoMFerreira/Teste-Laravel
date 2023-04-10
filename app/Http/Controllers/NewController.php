<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticias;
use App\Models\Like;
use RealRashid\SweetAlert\Facades\Alert;


class NewController extends Controller
{
    public function index() {    
        
        $news = Noticias::all();

        return view('welcome', ['noticias' => $news]);
    }
    
    public function create(Request $request) {     
        return view('events.create', []);
    }

    public function store(Request $request) {
        
        $noticia = new Noticias;

        $noticia->title = $request->title;
        $noticia->description = $request->description;
        $noticia->nome = $request->nome;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/noticias'), $imageName);

            $noticia->image = $imageName;
        }

        $noticia->save();

        Alert::success('Cadastro da notícia feito com sucesso');

        return redirect('/');

    }

    public function show($id) {     
        
        $noticia = Noticias::findOrFail($id);

        return view('events.show', ['noticias' => $noticia]);
    }

    public function destroy($id){

        Noticias::findOrFail($id)->delete();

        Alert::success('Notícia excluida com sucesso');

        return redirect('/');
    }

    public function edit($id){

        $noticias = Noticias::findOrFail($id);

        return view('events.edit', ['noticias' => $noticias]);

    }

    public function update(Request $request){

        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/noticias'), $imageName);

            $data['image'] = $imageName;
        }

        Noticias::findOrFail($request->id)->update($data);

        Alert::success('Aleração da notícia feita com sucesso');

        return redirect('/');

    }

    public function like($id){

        $noticias = Noticias::findOrFail($id);
        
        return redirect('/');
    }

}
