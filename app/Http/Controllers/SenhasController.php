<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senhas;
use App\Acesso;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Field;

class SenhasController extends Controller {

    private $senhas;

    public function __construct() {
        $this->middleware('auth');
        $this->idGrid = 'gridSenhas';
        $this->notificacao = Notificacao::notificacaoLst();
        $this->title = 'Senhas';
    }

    public function index() {
        $title = $this->title;

        $notificacaoLst = $this->notificacao;

        $grid = new Grid($this->idGrid);
        $grid->gridColumns = array('Acesso', 'Usuario', 'Login', 'Senha', 'Observacao');
        $grid->titleGrid = $this->title;
        $grid->addButton('edit', 'info', '', 'fa fa-pencil', 'senhas', 'modal', 'edit');
        $grid->addButton('edit', 'danger', '', 'fa fa-trash', 'senhas', 'modal', 'del');

        $btn = new Button();
        $btn->route = 'add';
        $btn->type = 'success';
        $btn->title = 'Adicionar';
        $btn->icon = 'fa fa-plus';
        $btn->name = 'senhas';
        $btn->toggle = 'modal';
        $btn->id = 'add';

        $btnAdd = $btn->createButton(NULL);

        $htmlGrid = $grid->createGrid();

        echo view('senhas.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
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

    public function gridsenhasload() {
        $senhasLst = Senhas::senhasLst();
//        
//        print "<pre>";
//        print_r($senhasLst);
//        die();

        Grid::jsonGrid($senhasLst, $this->idGrid);
    }

}
