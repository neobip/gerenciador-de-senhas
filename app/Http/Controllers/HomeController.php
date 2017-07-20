<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senhas;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $senhas = new Senhas();
        $usuario = new User();
        
//        print "<pre>";
//        print_r($usuario->getNomeUser());
//        die();
        
        $nome = $usuario->getNomeUser();
        
        $qtdSenhas = count($senhas->senhasLst($usuario->getUserID()));
        return view('home', compact('qtdSenhas', 'nome'));
//        return redirect()->route('home')->with('success', 'Bem vindo ' . $usuario->getNomeUser() . ' atualizado com sucesso');
    }
}
