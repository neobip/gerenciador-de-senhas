<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Notificacao;

class NotificacaoController extends Controller {

    public function notificacao() {

        $notificacao = new Notificacao();
//
        $notificacaoLst = $notificacao->notificacaoLst();

        return $notificacaoLst;
    }
    
 
    public function addForm() {

        $title = 'Cadastrar acesso';

        return view('acesso.ViewAdd', compact('title'));
    }

    public function editForm(Request $request) {

        $acesso = new Notificacao();

        $acessos = $acesso->acessoID($request->id);



        return view('acesso.ViewEdit', compact('acessos'));
    }

    public function envia(Request $request) {

        $acesso = new Notificacao();

        $send = $acesso->sendData($request);

        if ($request->id <> 0) {
            response()->json($send);
        } else {
            return redirect()->route('acesso')->with('success', 'Notificacao cadastrado com sucesso!');
        }
    }

//
}
