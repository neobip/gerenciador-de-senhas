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

class Element {

    public $elements;
    public $required;
    public $row;
    public $check;
    public $options = array();
    public $select;
    public $atribOption;

    public function __construct($type, $name, $label, $value) {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    public function getHtml() {

        switch ($this->type) {
            case 'checkbox':
                $element = ' <div><label>' . $this->label . '</label><div class="material-switch pull-right">
                            <input id="' . $this->name . '" name="someSwitchOption001" type="checkbox" ' . $this->check . ' />
                            <label for="' . $this->name . '" class="label-success"></label>
                        </div></div>';

                break;

            case 'select':
                $element = '<label for="' . $this->name . '">' . $this->label . '</label>';
                $element .= '<select class="form-control select2" name="' . $this->name . '" >';

                for ($i = 0; $i < count($this->options); $i++) {
                    if ($this->options[$i]['id'] == $this->value) {
                        $this->select = 'selected';
                        $element .= '<option selected="' . $this->select . '" value="' . $this->value . '">' . $this->options[$i][$this->atribOption] . '</option>';
                    }
                    if ($this->options[$i]['id'] <> $this->value) {
                        $element .= '<option value="' . $this->options[$i]['id'] . '">' . $this->options[$i][$this->atribOption] . '</option>';
                    }
                }

                $element .= "</select>";


                break;

            case 'textarea':

                $element = '<label for = "">' . $this->label . '</label>';
                $element.= '<textarea name="' . $this->name . '" class = "form-control" rows = "' . $this->row . '"></textarea>';

                break;


            default:
                $element = '<label>' . $this->label . '</label>';
                $element .= '<input type="' . $this->type . '" value="' . $this->value . '" name="' . $this->name . '" ' . $this->required . ' class="form-control"/>';
                break;
        }

        return $element;
    }

    public function __toString() {
        return $this->getHtml();
    }

    public function setCheck($check) {
        if ($check == 'S') {
            return $this->check = 'checked';
        }
    }

    public function setOptions($options) {
        $this->options = $options;
    }

    public function setSelected($value) {
        $this->value = $value;
    }
    
    public function setAtribOption($pAtrib) {
        $this->atribOption = $pAtrib;
    }

    public function setRequire() {
        if (isset($this)) {
            $this->required = 'required';
        }
    }

}
