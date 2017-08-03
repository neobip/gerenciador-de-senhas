<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Acesso;
use App\Notificacao;
use App\Libs\Grid;
use App\Libs\Button;

class AcessoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->idGrid = 'gridAcessos';
        $this->notificacao = Notificacao::notificacaoLst();
        $this->title = 'Acessos';
    }

    public function index() {
        $grid = new Grid($this->idGrid);
        $grid->gridColumns = array('acesso', 'link');
        $grid->addButton('editAcesso', 'info');

        $htmlGrid = $grid->createGrid();
        $notificacaoLst = $this->notificacao;

        $title = $this->title;

        echo view('acesso.ViewIndex', compact('notificacaoLst', 'htmlGrid'));
    }

    public function addForm() {

        $title = 'Cadastrar acesso';

        return view('acesso.ViewAdd', compact('title'));
    }

    public function editForm(Request $request) {

        $acesso = new Acesso();

        $acessos = $acesso->acessoID($request->id);



        return view('acesso.ViewEdit', compact('acessos'));
    }

    public function envia(Request $request) {

        $acesso = new Acesso();

        $send = $acesso->sendData($request);

        if ($request->id <> 0) {
            return response()->json(array('idGrid' => $this->idGrid));
        } else {
            return redirect()->route('acesso')->with('success', 'Acesso cadastrado com sucesso!');
        }
    }

    public function gridacessosload() {
        $acessosLst = Acesso::acessosLst();

        Grid::jsonGrid($acessosLst, $this->idGrid);
    }

//
}
