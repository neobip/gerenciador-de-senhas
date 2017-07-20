<?php

define('cAdministrador', 1);
define('cUsuario', 2);

Class tipoUsuario {

    function getList() {
        $num = 1;
        $lLista = array();

        $lLista['texto'][$num] = 'Administrador';
        $lLista['valor'][$num++] = cAdministrador;

        $lLista['texto'][$num] = 'Usuario';
        $lLista['valor'][$num++] = cUsuario;

        return $lLista['texto'];
    }

    function getItemTexto($pIndice) {

        switch ($pIndice) {
            case 1:
                return "Ativado";

                break;

            default:
                return "Desativado";
                break;
        }
    }

}
