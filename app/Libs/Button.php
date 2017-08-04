<?php

/**
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 * @AUTHOR        Jonathan Cruz
 * @email         jonathansc92@gmail.com
 * 03/08/2017
 */

namespace App\Libs;

class Button {

    public $route = "add";
    public $type = 'default';
    public $dataParamsLst;

    public function createButton($dataID = NULL) {

        if (isset($dataID)) {
            $button = '<a href="' . route($this->route) . '?id=' . $dataID . '" class="btn btn-' . $this->type . '" data-toggle="modal"
                                                    data-name="edit-modal"
                                                    data-target="categorias"
                                                    name="acesso"
                                                    data-id="' . $dataID . '"><i id="icon" class="fa fa-pencil"></i> </a>';
        } else {
            $button = '<a href="' . route($this->route) . '" class="btn btn-' . $this->type . '" data-toggle="modal"
                                                    data-name="add-modal"
                                                    data-target="categorias"
                                                    name="acesso"
                                                    data-id=""><i id="icon" class="fa fa-plus"></i> Adicionar</a>';
        }

        return $button;
    }

    public function modalButton($dataID) {
        
    }

}
