<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acesso;
use App\Senhas;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;
use App\Libs\Form;
use App\Libs\Field;

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

        echo view('acesso.ViewIndex', compact('notificacaoLst', 'htmlGrid', 'title', 'btnAdd'));
    }

    public function add() {

        $title = 'Cadastrar acesso';

        $form = new Form('enviaAcessos', 'POST', 'acesso.ViewAddAcessos');

        $field = new Field('text', 'acesso', 'Acesso', 'required', '', '');
        $form->addField($field);

        $field = new Field('text', 'link', 'Link', 'required', '');
        $form->addField($field);

        $formulario = $form->getHtml();

        return view('acesso.ViewAdd', compact('title', 'formulario'));
    }

    public function edit(Request $request) {

        $acessos = Acesso::acessoID($request->id);

        $form = new Form('enviaAcessos', 'POST', 'acesso.ViewEditAcessos');

        $field = new Field('hidden', 'id', '', 'required', $acessos->id);
        $form->addField($field);

        $field = new Field('text', 'acesso', 'Acesso', 'required', $acessos->acesso, 'Acesso');
        $form->addField($field);

        $field = new Field('text', 'link', 'Link', 'required', $acessos->link);
        $form->addField($field);

        $delTitle = 'Deseja deletar o acesso ' . $acessos->acesso . "?";

        $formulario = $form->getHtml();

        return view('layouts.ViewEdit', compact('acessos', 'formulario', 'delTitle'));
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

}
