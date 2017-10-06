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
        $grid->addButton('editSenhas', 'info', 'Editar', 'fa fa-pencil', 'senhas', '', 'edit');

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
//        $btn->name = 'senhas';
//        $btn->toggle = 'modal';
        $btn->id = 'add';

        $btnAdd = $btn->createButton(NULL);

        $htmlGrid = $grid->createGrid();

        echo view('layouts.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function addForm() {



        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewElements');

        $element = new Element('checkbox', 'global', 'global', 'Compartilhada?');
        $form->addElement($element);

        $element = new Element('checkbox', 'visualiza', 'visualiza', 'Vizualiza?');
        $form->addElement($element);

        $element = new Element('hidden', 'tipo', 'tipo', User::getUserTipo());
        $form->addElement($element);

        $element = new Element('select', 'user_id', 'user', 'Responsável');
        $element->setOptions(User::usuariosLst(), 'id', 'name');
        $element->setSelected(User::getUserID());
        $form->addElement($element);

        $element = new Element('select', 'acesso_id', 'acessos', 'Acesso');
        $element->setOptions(Acesso::acessosLst(), 'id', 'acesso');
        $form->addElement($element);

        $element = new Element('text', 'login', 'login', 'Login');
        $element->setRequire();
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'pwd', 'Senha');
        $form->addElement($element);

        $element = new Element('textarea', 'obs', 'obs', 'Observação');
        $element->row = 3;
        $form->addElement($element);

        $element = new Element('submit', 'btnSave', 'btnSave', '');
        $element->setValue('Cadastrar');
        $element->setClass('btn btn-success pull-right m-l-5');
        $element->setIcon('fa fa-save');
        $form->addElement($element);


        $element = new Element('link', 'btnCancel', 'btnCancel', '');
        $element->setValue('Cancelar');
        $element->setClass('btn btn-danger pull-right');
        $element->setRoute('senha');
        $element->setIcon('fa fa-close');
        $form->addElement($element);

        $formulario = $form->getHtml();

        $title = 'Cadastrar senha';
        $icon = 'fa fa-save';

        $notificacaoLst = $this->notificacao;

        return view('layouts.ViewForm', compact('notificacaoLst', 'icon', 'title', 'formulario'));
    }

    public function editForm(Request $request) {
        $senhas = Senhas::senhaID($request->id);


        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewElements');

        $element = new Element('hidden', 'id', 'id', '');
        $element->setValue($senhas[0]['id']);
        $form->addElement($element);

//        $element = new Element('input', 'tipo', 'tipo', '');
//        $element->setValue(User::getUserTipo());
//        $form->addElement($element);

        $element = new Element('checkbox', 'global', 'global', 'Compartilhada?');
        $element->setCheck($senhas[0]['global']);
        $form->addElement($element);

//        $element = new Element('select', 'global', 'global', 'Compartilhada?');
//            $element->setOptions(Acesso::acessosLst(), 'id', 'acesso');
//        $element->setAtribOption('acesso');
//        $element->setSelected($senhas[0]['acesso_id']);
//        $element->setMultiSelect2();
//        $form->addElement($element);

        $element = new Element('checkbox', 'visualiza', 'visualiza', 'Vizualiza?');
        $element->setCheck($senhas[0]['visualiza']);
        $form->addElement($element);


        $element = new Element('select', 'user_id', 'user', 'Responsável');
        $element->setOptions(User::usuariosLst(), 'id', 'name');
        $element->setSelected($senhas[0]['user_id']);
        $form->addElement($element);

        $element = new Element('select', 'acesso_id', 'acessos', 'Acesso');
        $element->setOptions(Acesso::acessosLst(), 'id', 'acesso');
        $element->setSelected($senhas[0]['acesso_id']);
        $form->addElement($element);

        $element = new Element('text', 'login', 'login', 'Login');
        $element->setRequire();
        $element->setValue($senhas[0]['login']);
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'pwd', 'Senha');
        $element->setValue($senhas[0]['pwd']);
        $form->addElement($element);

        $element = new Element('textarea', 'obs', 'obs', 'Observação');
        $element->row = 3;
        $element->setValue($senhas[0]['observacao']);
        $form->addElement($element);

        $element = new Element('submit', 'btnSave', 'btnSave', '');
        $element->setValue('Atualizar');
        $element->setClass('btn btn-success pull-right m-l-5');
        $element->setIcon('fa fa-save');
        $form->addElement($element);


        $element = new Element('link', 'btnCancel', 'btnCancel', '');
        $element->setValue('Cancelar');
        $element->setClass('btn btn-danger pull-right');
        $element->setRoute('senha');
        $element->setIcon('fa fa-close');
        $form->addElement($element);

        $formulario = $form->getHtml();

        $title = 'Atualizar senha';
        $icon = 'fa fa-save';
        $tipo = User::getUserTipo();

        $notificacaoLst = $this->notificacao;

        return view('layouts.ViewForm', compact('notificacaoLst', 'tipo', 'icon', 'title', 'formulario'));
    }

    public function delete(Request $request) {


        Senhas::find($request->id)->delete();
        return response()->json();
    }

    public function envia(Request $request) {

        $senha = new Senhas();

        $userID = new User();

        $send = $senha->sendData($request);

        return redirect()->route('senha')->with('info');
    }

    public function gridsenhasload() {
        $senhasLst = Senhas::senhasLst();

        Grid::jsonGrid($senhasLst, $this->idGrid);
    }

}
