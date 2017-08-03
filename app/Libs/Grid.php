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

use Session;
use App\Libs\Button;

class Grid {

    public $idGrid;
    public $gridColumns;
    public $dataLst;
    public $buttonLst;

    public function __construct($idGrid) {
        $this->idGrid = $idGrid;
    }

    public function createGrid() {


        Session::put($this->idGrid, $this);
        $grid = $this;
        
        $htmlGrid = view('layouts.ViewDatatables', compact('grid'));

        return $htmlGrid;
    }

    public static function jsonGrid($lst, $idGrid) {

        
        $grid = Session::get($idGrid);

        foreach ($lst as $key => $item) {

            foreach ($grid->gridColumns as $coluna) {
                $linha[] = $item[$coluna];
            }
//
//            $button = new Button();
//            $button->dataId = $value['id'];
            
            foreach ($grid->buttonLst as $button) {
                $buttons = $button->createButton();
                
            }


            $linha[] = $buttons;

            $dataLst[] = $linha;

            unset($linha);
        }


        $data['data'] = $dataLst;

        echo json_encode($data);
    }

    public function addButton($route, $type) {

        $button = new Button();
        $button->route = $route;
        $button->type = $type;

        $this->buttonLst[] = $button;
    }

}
