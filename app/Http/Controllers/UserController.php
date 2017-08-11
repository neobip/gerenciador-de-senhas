<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Field;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->idGrid = 'gridUsuarios';
        $this->notificacao = Notificacao::notificacaoLst();
        $this->title = 'Usuarios';
    }

    public function index() {
        $grid = new Grid($this->idGrid);
        $grid->gridColumns = array('name', 'email');
        $grid->titleGrid = $this->title;
        $grid->addButton('edit', 'info', '', 'fa fa-pencil', 'usuarios', 'modal', 'edit');
        $grid->addButton('edit', 'danger', '', 'fa fa-trash', 'usuarios', 'modal', 'del');

        $btn = new Button();
        $btn->route = 'add';
        $btn->type = 'success';
        $btn->title = 'Adicionar';
        $btn->icon = 'fa fa-plus';
        $btn->name = 'usuarios';
        $btn->toggle = 'modal';
        $btn->id = 'add';

        $btnAdd = $btn->createButton(NULL);

        $htmlGrid = $grid->createGrid();

        $title = $this->title;

        $notificacaoLst = $this->notificacao;

        echo view('user.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function addForm() {

        $title = 'Cadastrar Usuário';

//        $acessos = Acesso::pluck('nomeacesso', 'id');



        $notificacaoLst = Notificacao::notificacaoLst();
        return view('user.ViewAdd', compact('title'));
    }

    public function editPasswordForm(Request $request) {
        $title = 'Mudar Senha';

        $usuario = User::userID($request->id);

        return view('user.ViewEditPassword', compact('usuario', 'title', 'notificacaoLst'));
    }

    public function editForm(Request $request) {

        $title = 'Edição de usuário';

        $usuario = User::userID($request->id);

        $tipo = array(1 => 'Administrador', 2 => 'usuário');
        $ativado = array('S' => 'Sim', 'N' => 'Não');

        $notificacaoLst = Notificacao::notificacaoLst();

        return view('user.ViewEdit', compact('usuario', 'title', 'tipo', 'ativado', 'notificacaoLst'));
    }

    public function envia(Request $request) {

        User::sendData($request);

        return response()->json(array('idGrid' => $this->idGrid));
    }

    public function gridusuariosload() {
        $usuariosLst = User::usuariosLst();

        Grid::jsonGrid($usuariosLst, $this->idGrid);
    }

}
