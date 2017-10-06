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
    public $elements;

    public function __construct($route, $method, $view) {
        $this->route = $route;
        $this->method = $method;
        $this->view = $view;
    }

    public function getHtml() {
        $form = "<form action=" . route($this->route) . " method='" . $this->method . "' role='form'>" . csrf_field();

        $elements = $this->elements;

        $form .= view($this->view, compact('elements'));
        $form .= "</form>";
        return $form;
    }

    public function addElement($element) {
        $this->elements[$element->name] = $element;
    }

}
