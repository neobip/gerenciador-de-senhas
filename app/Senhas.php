<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

use App\User;
use App\Acesso;

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

            $senhas = Senhas::where('user_id', User::getUserID())
                            ->orWhere(function ($query) {
                                $query->where('global', 'S')
                                ->where('visualiza', 'S');
                            })->get();
        }




        foreach ($senhas as $value) {

            $senha['id'] = $value['id'];

            $senha['tipo'] = $value['Users']['tipo'];
            $senha['responsavel'] = $value['Users']['name'];
            $senha['acessos'] = "<a href='" . $value['Acessos']['link'] . "' target='_blank'>" . $value['Acessos']['acesso'] . "</a>";
            $senha['login'] = $value['login'];
            $senha['senha'] = $value['pwd'];
            $senha['obs'] = $value['obs'];

            $senhasLst[] = $senha;
        }

        return $senhasLst;
    }

    public static function getVerificaAcessoSenha($acesso) {
        $senhas = Senhas::where('acesso_id', $acesso)->get();

        return $senhas;
    }

    public static function senhaID($id) {
        $senhaByID = Senhas::find($id);
        //
        $senha['id'] = $senhaByID['id'];
        $senha['login'] = $senhaByID['login'];
        $senha['acesso_id'] = $senhaByID['acesso_id'];
        $senha['acessoLst'] = Acesso::acessosLst();;
        $senha['usersLst'] = User::usuariosLst();
        $senha['pwd'] = $senhaByID['pwd'];
        $senha['observacao'] = $senhaByID['obs'];
        $senha['visualiza'] = $senhaByID['visualiza'];
        $senha['global'] = $senhaByID['global'];
        $senha['user_id'] = $senhaByID['user_id'];
        $senha['tipo'] = $senhaByID['Users']['tipo'];

        $senhaLst[] = $senha;

        return $senhaLst;

//        return $senhaLst;
        return $senha;
    }

    public function sendData($request) {

        if ($user->getUserTipo() == '2') {
            $request->visualiza = 'S';
            $request->global = 'N';
            $request->user_id = User::getUserID();
        } elseif (User::getUserTipo() == '1') {
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
