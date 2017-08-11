<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Crypt;

//use App\Acesso;

class Senhas extends Model {

    protected $fillable = [
        'login', 'pwd', 'obs', 'titulo', 'user_id', 'global', 'acesso_id', 'updated_at', 'created_at', 'visualiza'
    ];
    protected $table = 'senhas';
    protected $primaryKey = 'id';

    public function acessos() {
        return $this->belongsTo('App\Acesso', 'acesso_id');
    }

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function trataCrypt($termo) {
        if (strlen($termo) > 100) {
            return $termoDescrypt = Crypt::decryptString($termo);
        } else {
            return $termo;
        }
    }

    public static function senhasLst() {

        if (User::getUserTipo() == 1) {
//            $senhas = $this->all();
            $senhas = Senhas::with('acessos')->get();
        } else {

            $senhas = Senhas::where('user_id', User::getUserTipo())
                            ->orWhere(function ($query) {
                                $query->where('global', 'S')
                                ->where('visualiza', 'S');
                            })->get();
        }
        
        foreach($senhas as $value){
            
            $senha['id'] = $value['id'];
            
            $senha['responsavel'] = $value['Users']['name'];
            $senha['acessos'] = $value['Acessos']['acesso'];
            $senha['login'] = $value['login'];
            $senha['senha'] = $value['pwd'];
            $senha['obs'] = $value['observacao'];
            
            $senhasLst[] = $senha;
        }

        return $senhasLst;
    }

    public static function getVerificaAcessoSenha($acesso) {
        $senhas = Senhas::where('acesso_id', $acesso)->get();

        return $senhas;
    }
    
//    public static function getUser

    public static function senhaID($id) {
//        $senhaByID = $this->find($id);
//
//        $senha['ID'] = $senhaByID['id'];
//        $senha['Login'] = $this->trataCrypt($senhaByID['login']);
//        $senha['AcessoID'] = $senhaByID['acesso_id'];
//        $senha['Senha'] = $this->trataCrypt($senhaByID['pwd']);
//        $senha['Observacao'] = $this->trataCrypt($senhaByID['obs']);
//        $senha['Visualiza'] = $senhaByID['visualiza'];
//        $senha['Global'] = $senhaByID['global'];
//        $senha['UserID'] = $senhaByID['user_id'];
//
//        $senhaLst[] = $senha;
        
        
 return Senhas::find($id);

//        return $senhaLst;
        return $senha;
    }

    public function sendData($request) {

        $user = new User();



        if ($user->getUserTipo() == '2') {
            $request->visualiza = 'S';
            $request->global = 'N';
            $request->user_id = $user->getUserID();
        } elseif ($user->getUserTipo() == '1') {
            if (!isset($request->visualiza)) {
                $request->visualiza = 'N';
            }

            if (!isset($request->global)) {
                $request->global = 'N';
            }
        }

        if (isset($request->id)) {
            $senhas = $this->find($request->id);


            return $update = $senhas->update([
                'login' => $request->login,
                'pwd' => $request->pwd,
                'obs' => $request->obs,
                'id' => $request->id,
                'global' => $request->global,
                'visualiza' => $request->visualiza,
                'acesso_id' => $request->acesso_id,
                'user_id' => $request->user_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        } else {

            return $insert = $this->create([
                'login' => $request->login,
                'pwd' => $request->pwd,
                'obs' => $request->obs,
                'id' => $request->id,
                'global' => $request->global,
                'visualiza' => $request->visualiza,
                'acesso_id' => $request->acesso_id,
                'user_id' => $request->user_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

//    public function senhaUser($id){
//        return $this->find($id);
//    }
}
