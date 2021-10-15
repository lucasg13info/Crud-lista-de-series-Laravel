<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()
            -> orderBy('nome')
            ->get() ;

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }
    public function create() {
        return view('series.create');
    }
    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());

        $request->session()
            ->flash(
                'mensagem', 
                "Série {$serie->id} criada com sucesso '{$serie->nome}'"
            );
        
        
        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem', 
                "Série Removida com sucesso"
            );
            return redirect('/series');
    }
    
    
}