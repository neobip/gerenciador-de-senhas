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

class Field {

    public $fields;

    public function __construct($type, $name, $label, $required, $value) {
        $this->type = $type;
        $this->name = $name;
        $this->required = $required;
        $this->value = $value;
        $this->label = $label;
    }

    public function getHtml() {

        switch ($this->type) {
            case 'checkbox':
                $field = '<span class="button-checkbox">
                        <button type="button" class="btn" data-color="primary">' . $this->label . '</button>
                        <input type="checkbox" class="hidden" checked />
                    </span>';

                break;
            
            case 'select':
                $field = '<label for="'.$this->name.'">' . $this->label;
                $field .= '<select class="form-control select" id="'.$this->name.'">';
                $field .= '<option>teste</option>';
                $field .= '<option>"'.$this->value.'"</option>';
                $field .= "</select></label>";
                
                
                 break;
                

            default:
                $field = '<label>' . $this->label . '</label>';
                $field .= '<input type="' . $this->type . '" value="' . $this->value . '" name="' . $this->name . '" ' . $this->required . ' class="form-control"/>';
                break;
        }

        return $field;
    }

    public function __toString() {
        return $this->getHtml();
    }

}
