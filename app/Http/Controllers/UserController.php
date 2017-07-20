<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    //

    public function index() {
        $title = "Usuários";

        $usuarios = new User();

        $usuariosLst = $usuarios->getUserLst();

        return view('user.ViewIndex', compact('title', 'usuariosLst'));
    }

    public function addForm() {

        $title = 'Cadastrar Usuário';

//        $acessos = Acesso::pluck('nomeacesso', 'id');




        return view('user.ViewAdd', compact('title'));
    }

    public function editPasswordForm(Request $request) {
        $title = 'Mudar Senha';

        $usuarios = new User();

        $usuario = $usuarios->userID($request->id);

        return view('user.ViewEditPassword', compact('usuario', 'title'));
    }

    public function editForm(Request $request) {

        $title = 'Edição de usuário';

        $usuarios = new User();

        $usuario = $usuarios->userID($request->id);

        $tipo = array(1 => 'Administrador', 2 => 'usuário');
        $ativado = array('S' => 'Sim', 'N' => 'Não');

//        print "<pre>";
//        print_r($usuario);
//        die();
//        $acessos = Acesso::pluck('nomeacesso', 'id');
//        \Session::flash('msg', 'Changes Saved.' );

        return view('user.ViewEdit', compact('usuario', 'title', 'tipo', 'ativado'));
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
