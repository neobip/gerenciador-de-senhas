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
 * 01/10/2016    
 */

namespace App\Libs;

class Form {

    public $route;
    public $method;
    public $view;
    public $fields;

    public function __construct($route, $method, $view) {
        $this->route = $route;
        $this->method = $method;
        $this->view = $view;
    }

    public function getHtml() {
        $form = "<form action=" . route($this->route) . " method='" . $this->method . "' class='form-horizontal' 'data-parsley-validate novalidate'>" . csrf_field();

        $fields = $this->fields;

        $form .= view($this->view, compact('fields'));
        $form .= "</form>";
        return $form;
    }

    public function addField($field) {
        $this->fields[$field->name] = $field;
    }

}
