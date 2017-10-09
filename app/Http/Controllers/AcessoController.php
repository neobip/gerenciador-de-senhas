<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acesso;
use App\Senhas;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Element;

class AcessoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->idGrid = 'gridAcessos';
        $this->notificacao = Notificacao::notificacaoLst();
        $this->title = 'Acessos';
    }

    public function index() {
        $grid = new Grid($this->idGrid);
//        $grid->gridColumns = array('acesso', 'link');
        $grid->titleGrid = $this->title;
        $grid->addButton('edit', 'info', '', 'fa fa-pencil', 'acessos', 'modal', 'edit');
        $grid->addButton('edit', 'danger', '', 'fa fa-trash', 'acessos', 'modal', 'del');

        $grid->addColumn('Acesso', 'acesso');
        $grid->addColumn('Link', 'link');

        $btn = new Button();
        $btn->route = 'addAcessos';
        $btn->type = 'success';
        $btn->title = 'Adicionar';
        $btn->icon = 'fa fa-plus';
        $btn->name = 'acessos';
        $btn->toggle = 'modal';
        $btn->id = 'add';

        $btnAdd = $btn->createButton(NULL);

        $htmlGrid = $grid->createGrid();
        $title = $this->title;

        $notificacaoLst = $this->notificacao;

        echo view('layouts.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function add() {

        $title = 'Cadastrar acesso';

        $form = new Form('enviaAcessos', 'POST', 'acesso.ViewElements');

        $element = new Element('text', 'acesso', 'acesso', 'Acesso');
        $element->required = 'required';
        $form->addElement($element);

        $element = new Element('text', 'link', 'link', 'Link');
        $element->required = 'required';
        $form->addElement($element);

        $formulario = $form->getHtml();

        return view('layouts.ViewFormModal', compact('title', 'formulario'));
    }

    public function edit(Request $request) {

        $acessos = Acesso::acessoID($request->id);

        $form = new Form('enviaAcessos', 'POST', 'acesso.ViewElements');

        $element = new Element('hidden', 'id', 'id', '');
        $element->required = 'required';
        $element->setValue($acessos->id);
        $form->addElement($element);

        $element = new Element('text', 'acesso', 'acesso', 'Acesso');
        $element->required = 'required';
        $element->setValue($acessos->acesso);
        $form->addElement($element);

        $element = new Element('text', 'link', 'link', $acessos->link);
        $element->required = 'required';
        $element->setValue($acessos->link);
        $form->addElement($element);

        $delTitle = 'Deseja deletar o acesso ' . $acessos->acesso . "?";

        $formulario = $form->getHtml();

        return view('layouts.ViewFormModal', compact('acessos', 'formulario', 'delTitle'));
    }

    public function del(Request $request) {

        $senhas = Senhas::getVerificaAcessoSenha($request->id);

        if (count($senhas) > 1) {

            return response()->json(array('idGrid' => 'Erro'));
        } else {
            Acesso::find($request->id)->delete();
            return response()->json(array('idGrid' => $this->idGrid));
        }
    }

    public function envia(Request $request) {

        Acesso::sendData($request);

        return response()->json(array('idGrid' => $this->idGrid));
    }

    public function gridacessosload() {
        $acessosLst = Acesso::acessosLst();

        Grid::jsonGrid($acessosLst, $this->idGrid);
    }

    public function getAcessos() {
        $acessos = Acesso::acessosLst();

//        print "<pre>";
//        print_r(json_encode($acessos));
//        die();
//        response()->json($estados)
        return response()->json($acessos);
    }

}
