<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Senhas;
use App\Acesso;
use App\User;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Columns;
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
//        $grid->gridColumns = array('Acesso', 'Usuario', 'Login', 'Senha', 'Observacao');
//        $grid->gridColumns = array('Login'=>'Login');
//        $grid->gridColumns = array('login');
        $grid->titleGrid = $this->title;
        $grid->addButton('editSenhas', 'info', '', 'fa fa-pencil', 'senhas', 'modal', 'edit');
        $grid->addButton('editSenhas', 'danger', '', 'fa fa-trash', 'senhas', 'modal', 'del');

        $grid->addColumn('Acesso', 'acessos');
        $grid->addColumn('Responsável', "responsavel");
        $grid->addColumn('Login', 'login');
        $grid->addColumn('Senha', 'senha');
        $grid->addColumn('Obs', 'obs');

        $btn = new Button();
        $btn->route = 'addSenhas';
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
        $senhas = Senhas::senhaID($request->id);
        
        $acessosLst = Acesso::pluck('acesso', 'id');
        
        Grid::jsonSelect($acessosLst);
//        
//        print "<pre>";
//        print_r($acessosLst);
//        die();
        $users = User::pluck('name', 'id');

        $form = new Form('enviaAcessos', 'POST', 'senhas.ViewEditSenhas');

        $field = new Field('hidden', 'id', '', 'required', $senhas->id);
        $form->addField($field);

        $field = new Field('checkbox', 'global', 'Senha compartilhada', '', $senhas->global);
        $form->addField($field);

        $field = new Field('select', 'link', 'Link', '', $acessosLst);
        $form->addField($field);

        $delTitle = 'Deseja deletar o acesso';

        $formulario = $form->getHtml();

        return view('layouts.ViewEdit', compact('senhas', 'formulario', 'delTitle'));
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

        Grid::jsonGrid($senhasLst, $this->idGrid);
    }

}
