<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Acesso;
use App\Notificacao;

class AcessoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->idGrid = 'gridAcessos';
    }

    public function index() {

        $acesso = new Acesso();
//
        $acessos = $acesso->acessosLst();


        $notificacaoLst = Notificacao::notificacaoLst();

        $grid['id'] = $this->idGrid;
        $grid['colunas'] = array('acesso', 'link');
        Session::put($this->idGrid, $grid);
        $htmlGrid = view('layouts.datatables', compact('grid'));
        
        $grid['id'] = $this->idGrid;
        $grid['colunas'] = array('acesso', 'link');
        Session::put($this->idGrid, $grid);
        $htmlGrid1 = view('layouts.datatables', compact('grid'));
        
//       return $htmlGrid;

        echo view('acesso.ViewIndex', compact('acessos', 'notificacaoLst', 'htmlGrid', 'htmlGrid1'));
//        return view('acesso.ViewIndex');
    }

    public function get_datatable() {
        return Datatables::eloquent(Acesso::query())->make(true);
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
            return response()->json(array('idGrid'=>$this->idGrid));
        } else {
            return redirect()->route('acesso')->with('success', 'Acesso cadastrado com sucesso!');
        }
    }

    public function gridacessosload() {
//                return Datatables::eloquent(Acesso::query())->make(true);

        $acesso = new Acesso();
//
        $acessos = $acesso->acessosLst();

        $array = Session::get($this->idGrid);

        foreach ($acessos as $key => $value) {
//           $item = $value[$key]
            foreach ($array['colunas'] as $key1 => $value1) {
                $item[] = $value[$value1];
            }

            $item[] = '<a href="'.route('editAcesso').'?id='.$value['id'].'" class="btn btn-info edit-modal" data-toggle="modal"
                                                    data-name="edit-modal"
                                                    data-target="acessos"
                                                    name="'.$value['acesso'].'"
                                                    data-id="'.$value['id'].'"><i class="fa fa-pencil"></i> Editar</a>';
            $lst[] = $item;
            unset($item);
        }
        $data['data'] = $lst;
//        print "<pre>";
//        print_r(json_encode($data));
//        die();

        echo json_encode($data);
    }

//
}
