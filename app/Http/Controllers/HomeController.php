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

        $notificacaoLst = Notificacao::notificacaoLst();

//        print "<pre>";
//        print_r($notificacaoLst);
//        die();
        
        return view('home', compact('qtdSenhas', 'nome', 'notificacaoLst'));
    }

}
