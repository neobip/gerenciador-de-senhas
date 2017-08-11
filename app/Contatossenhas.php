<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatossenhas extends Model {

    protected $fillable = [
        'nome', 'updated_at', 'created_at', 'email', 'titulo', 'telefone'
    ];
    protected $table = 'contatos_senhas';
    protected $primaryKey = 'id';

    public static function contatosLst() {

        $contatos = Contatossenhas::all();

        return $contatos;
    }

    public function sendData($request) {
        if (isset($request->id)) {
            return $update = $senhas->update([

                'updated_at' => date('Y-m-d H:i:s')
            ]);
        } else {
            return $insert = $this->create([

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

}
