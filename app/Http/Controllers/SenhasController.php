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
        $grid->addButton('editSenhas', 'info', '', 'fa fa-pencil', 'senhas', '', 'edit');
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
//        $btn->name = 'senhas';
//        $btn->toggle = 'modal';
        $btn->id = 'add';

        $btnAdd = $btn->createButton(NULL);

        $htmlGrid = $grid->createGrid();

        echo view('layouts.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function addForm() {



        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewElements');

        $element = new Element('checkbox', 'global', 'Compartilhada?', '');
        $form->addElement($element);

        $element = new Element('checkbox', 'visualiza', 'Vizualiza?', '');
        $form->addElement($element);

        $element = new Element('hidden', 'tipo', 'tipo', User::getUserTipo());
        $form->addElement($element);

        $element = new Element('select', 'user', 'Responsável', '');
        $element->setOptions(User::usuariosLst());
        $element->setAtribOption('name');
        $form->addElement($element);

        $element = new Element('select', 'acessos', 'Acesso', '');
        $element->setOptions(Acesso::acessosLst());
        $element->setAtribOption('acesso');
        $form->addElement($element);

        $element = new Element('text', 'login', 'Login', '');
        $element->setRequire();
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'Senha', '');
        $form->addElement($element);

        $element = new Element('textarea', 'observacao', 'Observação', '');
        $element->row = 3;
        
        $form->addElement($element);

        $formulario = $form->getHtml();

        $title = 'Cadastrar senha';

        $notificacaoLst = $this->notificacao;


//        return view('layouts.ViewForm', compact('notificacaoLst', 'title', 'formulario'));
        return view('layouts.ViewForm', compact('notificacaoLst', 'title', 'formulario'));
    }

    public function editForm(Request $request) {
        $senhas = Senhas::senhaID($request->id);
//        print "<pre>";
//        print_r($senhas[0]['acessoLst']);
//        die();

        $form = new Form('enviaSenhas', 'POST', 'senhas.ViewElements');

        $element = new Element('hidden', 'id', 'id', $senhas[0]['id']);
        $form->addElement($element);

        $element = new Element('hidden', 'tipo', 'tipo', $senhas[0]['tipo']);
        $form->addElement($element);

        $element = new Element('checkbox', 'global', 'Compartilhada?', $senhas[0]['global']);
        $element->setCheck($senhas[0]['global']);
        $form->addElement($element);

//        $element = new Element('checkbox', 'visualiza', 'Vizualiza?', $senhas->visualiza);
        $element = new Element('checkbox', 'visualiza', 'Vizualiza?', $senhas[0]['visualiza']);
        $element->setCheck($senhas[0]['visualiza']);
        $form->addElement($element);

        $element = new Element('select', 'user', 'Responsável', $senhas[0]['user_id']);
        $element->setOptions($senhas[0]['usersLst']);
        $element->setAtribOption('name');
        $element->setSelected($senhas[0]['user_id']);
        $form->addElement($element);

        $element = new Element('select', 'acessos', 'Acesso', $senhas[0]['acesso_id']);
        $element->setOptions($senhas[0]['acessoLst']);
        $element->setAtribOption('acesso');
        $element->setSelected($senhas[0]['acesso_id']);
        $form->addElement($element);

        $element = new Element('text', 'login', 'Login', $senhas[0]['login']);
        $element->setRequire();
//        $element->required = 'required';
        $form->addElement($element);

        $element = new Element('text', 'pwd', 'Senha', $senhas[0]['pwd']);
        $form->addElement($element);

        $element = new Element('textarea', 'observacao', 'Observação', $senhas[0]['observacao']);
        $element->row = 3;
        $form->addElement($element);

        $formulario = $form->getHtml();

        return view('layouts.ViewForm', compact('formulario'));
    }

    public function delete(Request $request) {


        Senhas::find($request->id)->delete();
        return response()->json();
    }

    public function envia(Request $request) {


        $senha = new Senhas();

        $userID = new User();

        $send = $senha->sendData($request);


        if (isset($request->id)) {
            print "<pre>";
            print_r(response()->json);
            die();
            return response()->json(array('idGrid' => $this->idGrid));
        } else {
            return response()->json(array('idGrid' => $this->idGrid));
        }
    }

    public function gridsenhasload() {
        $senhasLst = Senhas::senhasLst();

        Grid::jsonGrid($senhasLst, $this->idGrid);
    }

}
