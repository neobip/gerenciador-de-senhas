<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notificacao;

class UserController extends Controller {

    //

    public function index() {
        $title = "Usuários";

        $usuarios = new User();

        $usuariosLst = $usuarios->getUserLst();

        $notificacaoLst = Notificacao::notificacaoLst();


        return view('user.ViewIndex', compact('title', 'usuariosLst', 'notificacaoLst'));
    }

    public function addForm() {

        $title = 'Cadastrar Usuário';

//        $acessos = Acesso::pluck('nomeacesso', 'id');



        $notificacaoLst = Notificacao::notificacaoLst();
        return view('user.ViewAdd', compact('title'));
    }

    public function editPasswordForm(Request $request) {
        $title = 'Mudar Senha';

        $usuarios = new User();

        $usuario = $usuarios->userID($request->id);

        return view('user.ViewEditPassword', compact('usuario', 'title', 'notificacaoLst'));
    }

    public function editForm(Request $request) {

        $title = 'Edição de usuário';

        $usuarios = new User();

        $usuario = $usuarios->userID($request->id);

        $tipo = array(1 => 'Administrador', 2 => 'usuário');
        $ativado = array('S' => 'Sim', 'N' => 'Não');

        $notificacaoLst = Notificacao::notificacaoLst();

        return view('user.ViewEdit', compact('usuario', 'title', 'tipo', 'ativado', 'notificacaoLst'));
    }

    public function envia(Request $request) {


        $usuario = new User();

//        $userID = new User();

        $usuario->sendData($request);

        if (isset($request->id)) {
            return redirect()->route('usuario')->with('info', 'Usuário ' . $request->name . ' atualizado com sucesso');
        } else {
            return redirect()->route('usuario')->with('success', 'Usuário cadastrado com sucesso!');
        }
    }

}
