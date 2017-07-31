<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Acesso;
use App\Notificacao;

class AcessoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $acesso = new Acesso();
//
        $acessos = $acesso->acessosLst();

        
        $notificacaoLst = Notificacao::notificacaoLst();

        return view('acesso.ViewIndex', compact('acessos', 'notificacaoLst'));
//        return view('acesso.ViewIndex');
    }

    public function get_datatable() {
        return Datatables::eloquent(Acesso::query())->make(true);
    }

    public function addForm() {

        $title = 'Cadastrar acesso';

        return view('acesso.ViewAdd', compact('title'));
    }

    public function editForm(Request $request) {

        $acesso = new Acesso();

        $acessos = $acesso->acessoID($request->id);



        return view('acesso.ViewEdit', compact('acessos'));
    }

    public function envia(Request $request) {

        $acesso = new Acesso();

        $send = $acesso->sendData($request);

        if ($request->id <> 0) {
            response()->json($send);
        } else {
            return redirect()->route('acesso')->with('success', 'Acesso cadastrado com sucesso!');
        }
    }

//
}
