<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senhas;
use App\User;
use App\Notificacao;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {


        $senhas = new Senhas();
        $usuario = new User();

        $nome = $usuario->getNomeUser();

        $qtdSenhas = count($senhas->senhasLst($usuario->getUserID()));


        $notificacao = new Notificacao();
//
        $notificacaoLst = $notificacao->notificacaoLst();

        
        return view('home', compact('qtdSenhas', 'nome', 'notificacaoLst'));
//        return redirect()->route('home')->with('success', 'Bem vindo ' . $usuario->getNomeUser() . ' atualizado com sucesso');
    }

}
