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

    public $route;
    public $type = 'default';
    public $icon;
    public $title;
    public $name;
    public $toggle;
    public $id;
    
    public $dataParamsLst;

    public function createButton($dataID = NULL) {
//data-animation="xxx" data-plugin="custommodal" data-overlaySpeed="xxx" data-overlayColor="#xxx"
        if (isset($dataID)) {
            $button = '<a href="' . route($this->route) . '?id=' . $dataID . '"  class="btn btn-' . $this->type . '" id="' . $this->id . '" 
                                                    name="' . $this->name . '" 
                                                    data-toggle="'.$this->toggle.'"
                                                    data-id="' . $dataID . '" title="' . $this->title . '"><i id="' . $this->id . '" class="' . $this->icon . '" ></i> ' . $this->title . '</a>';
        } else {
            $button = '<a href="' . route($this->route) . '" class="btn btn-' . $this->type . '" data-toggle="'.$this->toggle.'"
                                                    id="add"
                                                    name="' . $this->name . '"
                                                    title="' . $this->title . '"><i id="' . $this->route . '" class="' . $this->icon . '" ></i> ' . $this->title . '</a>';
        }

        return $button;
    }

}
