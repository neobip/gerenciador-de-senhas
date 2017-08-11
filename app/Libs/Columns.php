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

class Columns {

    public $chead;
    public $cdata;
//    public $cdata;
    
    public $type;
    
//    public $columns;

    public function __construct($chead, $cdata) {
        $this->chead = $chead;
        $this->cdata = $cdata;
    }



}
