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
    public $placeholder;
    public $value;
    public $class;
    public $icon;
    public $mask = '';
    public $options;
    public $selected;
    public $atrib;
    public $optionEmpty;
    public $multiselect;
    public $valueDefault;
    public $msg;
    public $alertType;

    public function __construct($type, $name, $id, $label) {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
    }

    public function getHtml() {

        switch ($this->type) {
            case 'checkbox':
                $element = ' <div><label>' . $this->label . '</label><div class="material-switch pull-right">
                            <input value="S" id="' . $this->name . '" name="' . $this->name . '" type="checkbox" ' . $this->check . ' />
                            <label for="' . $this->name . '" class="label-success"></label>
                        </div></div>';

                break;

            case 'submit':
                $element = '<button id="' . $this->id . '" name="' . $this->name . '" type="submit" class="waves-effect ' . $this->class . '"/><span class="' . $this->icon . '"></span> ' . $this->value . '</button>';
                break;

            case 'data':
                $element = '<label>' . $this->label . '</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker">
                                        <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                    </div>
                                </div>';
                break;

            case 'select':
                $element = '<label for="' . $this->name . '">' . $this->label . '</label>';
                $element .= '<select ' . $this->multiselect . ' class="form-control select2" name="' . $this->name . '" "' . $this->required . '" >';
                $element .= $this->optionEmpty;
                for ($i = 0; $i < count($this->options); $i++) {

                    if (is_object($this->options)) {
                        $value = $this->options[$i][$this->value];
                        $atrib = $this->options[$i][$this->atrib];
                    } else {
                        $value = $this->options[$i];
                        $atrib = $this->options[$i];
                    }

                    if ($value == $this->valueDefault) {
                        $element .= '<option selected="' . $this->selected . '" value="' . $this->valueDefault . '">' . $atrib . '</option>';
                    }
                    if ($value <> $this->valueDefault) {
                        $element .= '<option value=' . $value . '>' . $atrib . '</option>';
                    }
                }
                $element .= "</select>";
                break;

            case 'link':
//                $element = '<a href="' . route($this->route) . '?id=' . $dataID . '"  class="'.$this->class.'" id="' . $this->id . '" 
//                                                    name="' . $this->name . '" 
//                                                    data-toggle="' . $this->toggle . '"
//                                                    data-id="' . $dataID . '" title="' . $this->title . '"><i id="' . $this->id . '" class="' . $this->icon . '" ></i> ' . $this->title . '</a>';
                $element = ' <a href="' . route($this->route) . '?id="  class="' . $this->class . '" id="' . $this->id . '" 
                                                    name="' . $this->name . '" 
                                                    data-toggle=""
                                                    data-id="" title=""><i id="' . $this->id . '" class="waves-effect ' . $this->icon . '" ></i> ' . $this->value . '</a> ';

                break;

            case 'textarea':
                $element = '<label for = "">' . $this->label . '</label>';
                $element .= '<textarea name="' . $this->name . '" class = "form-control" rows = "' . $this->row . '"></textarea>';

                break;

            case 'display':
                $element = '<div class = "alert alert-"'.$this->alertType.'" id="#alerta" alert-block">
                        <button type = "button" class = "close" data-dismiss = "alert">×</button>
                        <strong> 
                            '.$this->msg.'
                        </strong>
                    </div>';
                break;



            default:
                $element = '<label>' . $this->label . '</label>';
//                $element .= '<input data-mask="'.$this->mask.'" placeholder="'.$this->placeholder.'" type="' . $this->type . '" value="' . $this->value . '" name="' . $this->name . '" ' . $this->required . ' class="form-control"/>';
                $element .= '<input placeholder="' . $this->placeholder . '" type="' . $this->type . '" value="' . $this->value . '" name="' . $this->name . '" ' . $this->required . ' class="form-control"/>';
                break;
        }

        return $element;
    }

    public function __toString() {
        return $this->getHtml();
    }
    
    public function setMsg($msg){
        if (isset($this)) {
            $this->msg = $msg;
        }
    }
    public function setAlert($msg){
        if (isset($this)) {
            $this->alertType = $msg;
        }
    }

    // START SELECT Options
    public function setOptions($pOptions, $pValue, $pAtrib) {


        $this->options = $pOptions;


        $this->value = $pValue;


        $this->atrib = $pAtrib;
    }

    public function setOptionEmpty() {
        if (isset($this)) {
            $this->optionEmpty = '<option></option>';
        }
    }

    public function setMultiSelect2() {
        if (isset($this)) {
            $this->multiselect = "multiple";
        }
    }

    public function setSelected($value) {
        $this->valueDefault = $value;
    }

    // END SELECT
    // CHECK IF FIELD CHECKBOX IS CHECKED
    public function setCheck($check) {
        if ($check == 'S') {
            $this->check = 'checked';
        }
    }

    // FIELD IS REQUIRED
    public function setRequire() {
        if (isset($this)) {
            $this->required = 'required';
        }
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setPlaceholder($placeholder) {
        if (isset($this)) {
            $this->placeholder = $placeholder;
        }
    }

    public function setMaskPhone() {
        $this->mask = "(999) 999999999";
    }

    public function setMaskData() {
        $this->mask = "dd/mm/yyyy";
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

}
