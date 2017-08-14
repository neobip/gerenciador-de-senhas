<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senhas;
use App\Acesso;
use App\User;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Element;

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

        echo view('layouts.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function addForm() {

        $title = 'Cadastrar senha';

        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewAddSenhas');

        $element = new Element('checkbox', 'global', 'Compartilhada?', '');
        $form->addElement($element);

        $element = new Element('checkbox', 'visualiza', 'Vizualiza?', '');
        $form->addElement($element);

        $element = new Element('select', 'user', 'Responsável', '');
        $form->addElement($element);

        $element = new Element('select', 'acessos', 'Acesso', '');
        $form->addElement($element);

        $element = new Element('text', 'login', 'Login', '');
        $element->setRequire();
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'Senha', '');
        
        $form->addElement($element);

        $element = new Element('textarea', 'observacao', 'Observação', '');
        $element->row = 3;
        $form->addElement($element);



        $element = new Element('text', 'link', 'Link', '');
        $element->required = 'required';
        $form->addElement($element);

        $formulario = $form->getHtml();

        return view('layouts.ViewAdd', compact('title', 'formulario'));
    }

    public function editForm(Request $request) {
        $senhas = Senhas::senhaID($request->id);
        
//        print "<pre>";
//        print_r($senhas->global);
//        die();

        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewAddSenhas');

        $element = new Element('checkbox', 'global', 'Compartilhada?', $senhas->global);
        $element->setCheck($senhas->global);
        $form->addElement($element);

        $element = new Element('checkbox', 'visualiza', 'Vizualiza?', $senhas->visualiza);
        $form->addElement($element);

        $element = new Element('select', 'user', 'Responsável', $senhas->user_id);
        $form->addElement($element);

        $element = new Element('select', 'acessos', 'Acesso', $senhas->acesso_id);
        $form->addElement($element);

        $element = new Element('text', 'login', 'Login', $senhas->login);
        $element->setRequire();
//        $element->required = 'required';
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'Senha', $senhas->pwd);
        $form->addElement($element);

        $element = new Element('textarea', 'observacao', 'Observação', $senhas->observacao);
        $element->row = 3;
        $form->addElement($element);

        $formulario = $form->getHtml();

        $delTitle = 'Deseja deletar o acesso';

        return view('layouts.ViewEdit', compact('title', 'formulario', 'delTitle'));
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
