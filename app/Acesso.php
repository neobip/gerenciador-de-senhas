<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

//use Libs\Data;

class Acesso extends Model {

    protected $table = 'acessos';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id', 'acesso', 'link'
    ];

    public function senhas() {
//        return $this->hasMany('App\Senhas', 'id');
        return $this->hasMany('App\Senhas', 'Senhas.id');
    }

    public static function acessosLst() {

        $acessos = Acesso::all();

        return $acessos;
    }
    
    public function acessoID($id) {
        return $this->find($id);
    }

    public function sendData($request) {

        if (isset($request->id)) {
            $acessos = Acesso::acessoID($request->id);
            $update = $acessos->update([
                'acesso' => $request->acesso,
                'link' => $request->link,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            if ($update) {
//                return 'fun';
            } else
                echo "Erro";
        } else {

            $insert = $this->create([

                'acesso' => $request->acesso,
                'link' => $request->link,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            if ($insert) {
//                return 'Inserido com sucesso';
            } else {
                echo'Falha';
            }
        }
    }

}
