<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senhas;
use App\Acesso;
use App\User;
use App\Notificacao;

class SenhasController extends Controller {

    private $senhas;

    public function __construct(Senhas $senhas) {
        $this->senhas = $senhas;
    }

    public function index() {

        $userID = new User();

        $senha = new Senhas();

        $senhas = $senha->senhasLst();

        $notificacaoLst = Notificacao::notificacaoLst();

        return view('senhas.ViewIndex', compact('senhas', 'notificacaoLst'));
    }

    public function addForm() {

        $title = 'Cadastrar senha';

        $acessos = Acesso::pluck('acesso', 'id');
        $users = User::pluck('name', 'id');

        $notificacaoLst = Notificacao::notificacaoLst();

        return view('senhas.ViewAdd', compact('title', 'acessos', 'users', 'notificacaoLst'));
    }

    public function editForm(Request $request) {

        $senha = new Senhas();

        $senhas = $senha->senhaID($request->id);


        $acessos = Acesso::pluck('acesso', 'id');
        $users = User::pluck('name', 'id');

        $notificacaoLst = Notificacao::notificacaoLst();

        return view('senhas.ViewEdit', compact('senhas', 'acessos', 'users', 'notificacaoLst'));
    }

    public function delete(Request $request) {


        Senhas::find($request->id)->delete();
        return response()->json();
    }

    public function envia(Request $request) {
        $senha = new Senhas();

        $userID = new User();

        $send = $senha->sendData($request);

        $notification = array(
            'message' => 'I am a successful message!',
            'alert-type' => 'success'
        );

        if (isset($request->id)) {
            return redirect()->route('senha')->with($notification);
//            return response()->json($send);
        } else {
            return redirect()->route('senha')->with('success', 'Senha adicionada');
        }
    }

}
