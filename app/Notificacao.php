<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Notificacao extends Model {

    protected $fillable = [
        'notificacao', 'updated_at', 'created_at', 'tutorial', 'titulo'
    ];
    protected $table = 'notificacao';
    protected $primaryKey = 'id';

    public static function notificacaoLst() {


        $notificacao = Notificacao::all();

        return $notificacao;
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
                'login' => Crypt::encryptString($request->login),
                'pwd' => Crypt::encryptString($request->pwd),
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
                'login' => Crypt::encryptString($request->login),
                'pwd' => Crypt::encryptString($request->pwd),
                'obs' => Crypt::encryptString($request->obs),
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
