<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Senhas;
use App\Acesso;
use App\User;

class SenhasController extends Controller {

    private $senhas;

    public function __construct(Senhas $senhas) {
        $this->senhas = $senhas;
    }

    public function index() {

        $userID = new User();

        $senha = new Senhas();

        $senhas = $senha->senhasLst();

        return view('senhas.ViewIndex', compact('senhas'));
    }

    public function addForm() {

        $title = 'Cadastrar senha';

        $acessos = Acesso::pluck('acesso', 'id');
        $users = User::pluck('name', 'id');


        return view('senhas.ViewAdd', compact('title', 'acessos', 'users'));
    }

    public function editForm(Request $request) {

        $senha = new Senhas();

        $senhas = $senha->senhaID($request->id);


        $acessos = Acesso::pluck('acesso', 'id');
        $users = User::pluck('name', 'id');

//        \Session::flash('msg', 'Changes Saved.' );

        return view('senhas.ViewEdit', compact('senhas', 'acessos', 'users'));
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
//            return redirect()->route('senha')->with('info', 'Senha editada com sucesso');
            return response()->json($send);
        } else {
            return response()->json($send);
        }
    }

}
