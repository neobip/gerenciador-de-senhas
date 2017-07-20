<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable {

    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'oidsigu', 'ativo', 'tipo', 'lastlogin_at', 'iplastlogin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function senhas() {
//        return $this->hasMany('App\Senhas', 'id');
        return $this->hasMany('App\Senhas', 'Senhas.id');
    }

    public function getUserLst() {
        return $this->all();
    }

    public function userID($id) {
        return $this->find($id);
    }

    public function getUserID() {
        return Auth::user()->id;
    }

    public function getNomeUser() {
        return Auth::user()->name;
    }

    public function getUserTipo() {
        return Auth::user()->tipo;
    }

    public function saveLastLogin() {
        $usuarios = User::userID($this->getUserID());
        
//        print "<pre>";
//        print_r($usuarios);
//        die();
        
        return $update = $usuarios->update([
            'lastlogin_at' => date('Y-m-d H:i:s'),
            'iplastlogin' => $_SERVER["REMOTE_ADDR"]
        ]);
    }

    public function sendData($request) {
        $usuarios = User::userID($request->id);
        $password = $request->password;

        if ($password <> '') {
            $update = $usuarios->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => date('Y-m-d H:i:s'),
                'tipo' => $request->tipo,
                'ativo' => $request->ativo,
                'oidsigu' => $request->oidsigu,
                'password' => bcrypt($request->password)
            ]);
        } else {
            $update = $usuarios->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => date('Y-m-d H:i:s'),
                'tipo' => $request->tipo,
                'ativo' => $request->ativo,
                'oidsigu' => $request->oidsigu,
//                'lastlogin_at' => date('Y-m-d H:i:s'),
//                'iplastlogin' => $_SERVER["REMOTE_ADDR"],
            ]);
        }
        if ($update) {
//                echo "atualizado";
        } else
            echo "Erro";
    }

}
