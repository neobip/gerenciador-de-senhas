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
    
    public $route = "#none";
    public $type = 'default';

   public function createButton($dataID){
       
//       return 'oi';
              
       
      $button = '<a href="' . route($this->route) . '?id=' . $this->dataId . '" class="btn btn-'.$this->type.'" data-toggle="modal"
                                                    data-name="edit-modal"
                                                    data-target="categorias"
                                                    name="acesso"
                                                    data-id="' . $this->dataId . '"><i class="fa fa-pencil"></i> </a>';
      
      return $button;
   }
   
   public function modalButton($dataID){
       
   }

}
