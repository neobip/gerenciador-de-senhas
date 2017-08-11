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
use App\Libs\Columns;

class Grid {

    public $idGrid;
    public $gridColumns;
    public $dataLst;
    public $buttonLst;
    public $titleGrid;

    public function __construct($idGrid) {
        $this->idGrid = $idGrid;
    }

    public function createGrid() {

        $button = new Button();
//        $colmun = new Columns();

        Session::put($this->idGrid, $this);
        $grid = $this;

        $title = $this->titleGrid;

        $htmlGrid = view('layouts.ViewDatatables', compact('grid', 'title'));

        return $htmlGrid;
    }

    public static function jsonGrid($lst, $idGrid) {



        $grid = Session::get($idGrid);



        foreach ($lst as $key => $item) {

            $linha = array();
            foreach ($grid->gridColumns as $coluna) {

                $linha[] = $item[$coluna->cdata];
           
            }

            $buttons = '';
            foreach ($grid->buttonLst as $button) {
                $buttons .= $button->createButton($item['id']);
                $buttons .= " ";
            }


            $linha[] = $buttons;


            $dataLst[] = $linha;
        }


        $data['data'] = $dataLst;

        echo json_encode($data);
    }
    
    public static function jsonSelect($lst){
        print "<pre>";
        print_r($lst);
        die();
    }

    public function addButton($route, $type, $title, $icon, $name, $toggle = NULL, $id) {

        $button = new Button();
        $button->route = $route;
        $button->type = $type;
        $button->title = $title;
        $button->icon = $icon;
        $button->name = $name;
        $button->toggle = $toggle;
        $button->id = $id;

        $this->buttonLst[] = $button;
    }

    public function addColumn($chead, $cdata) {
        $column = new Columns($chead, $cdata);


        $this->gridColumns[] = $column;
    }

}
