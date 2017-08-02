<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class Notificacao extends Model {

    protected $fillable = [
        'notificacao', 'updated_at', 'created_at', 'tutorial', 'titulo'
    ];
    protected $table = 'notificacao';
    protected $primaryKey = 'id';

    public static function notificacaoLst() {


        $notificacao = Notificacao::all();

        for ($i = 0; $i < count($notificacao); $i++) {
            $not['Title'] = $notificacao[$i]['titulo'];
            $not['Tutorial'] = $notificacao[$i]['tutorial'];
            $not['Notificacao'] = $notificacao[$i]['notificacao'];
            $not['Data'] = Carbon::parse($notificacao[$i]['created_at'])->format('d/m/Y');

            $notificacaoLst[] = $not;
        }

        return $notificacaoLst;
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
