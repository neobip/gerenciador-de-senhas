<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Element;

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



    public function editForm(Request $request) {
        $usuario = User::userID($request->id);

        $form = new Form('enviaUser', 'POST', 'user.ViewElements');

        $element = new Element('hidden', 'id', 'id', '');
        $element->required = 'required';
        $element->setValue($usuario->id);
        $form->addElement($element);

        $element = new Element('password', 'password', 'password', 'Senha');
        $element->setValue($usuario->password);
        $form->addElement($element);

        $formulario = $form->getHtml();

        return view('layouts.ViewFormModal', compact('usuario', 'formulario'));
        
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
