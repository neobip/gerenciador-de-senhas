<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Senhas;
use App\User;
use App\Notificacao;
use App\Contatossenhas;
use Laralabs\Toaster\Toast;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->contatosLst = Contatossenhas::contatosLst();
    }

    public function index() {


        $senhas = new Senhas();
        $usuario = new User();

        $nome = $usuario->getNomeUser();

        $qtdSenhas = count($senhas->senhasLst($usuario->getUserID()));

        $notificacaoLst = Notificacao::notificacaoLst();
        
        $contatosLst = $this->contatosLst;

//        print "<pre>";
//        print_r($notificacaoLst);
//        die();
 toaster()->add('Add message here')->toast();
        return view('home', compact('qtdSenhas', 'nome', 'notificacaoLst', 'contatosLst'));
    }

}
