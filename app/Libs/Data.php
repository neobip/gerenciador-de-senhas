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

class Data {

    public function dataMes($diaMes) {

        switch ($diaMes) {
            case 1: $mes = "Janeiro";
                break;
            case 2: $mes = "Fevereiro";
                break;
            case 3: $mes = "Marco";
                break;
            case 04: $mes = "Abril";
                break;
            case 5: $mes = "Maio";
                break;
            case 6: $mes = "Junho";
                break;
            case 7: $mes = "Julho";
                break;
            case 8: $mes = "Agosto";
                break;
            case 9: $mes = "Setembro";
                break;
            case 10: $mes = "Outubro";
                break;
            case 11: $mes = "Novembro";
                break;
            case 12: $mes = "Dezembro";
                break;
//            default;
        }

        return $mes;
    }

    public static function convertDateToUSA($date) {
        $newDate = implode('-', array_reverse(explode('/', $date)));

        return $newDate;
    }

    public static function dataBrasil($dataBR) {
        $newDate = date('d/m/Y', strtotime($dataBR));

        return $newDate;
    }

    public static function dataHora() {
        $dataHora = date('Y-m-d H:i:s');

        return $dataHora;
    }

    public static function dataParcelas($nParcelas, $dataPrimeiraParcela = null) {
        if ($dataPrimeiraParcela != null) {
            $dataPrimeiraParcela = explode("/", $dataPrimeiraParcela);
            $dia = $dataPrimeiraParcela[0];
            $mes = $dataPrimeiraParcela[1];
            $ano = $dataPrimeiraParcela[2];
        } else {
            $dia = date("d");
            $mes = date("m");
            $ano = date("Y");
        }

        for ($x = 0; $x < $nParcelas; $x++) {
            $vencimento[] = date("Y-m-d", strtotime("+" . $x . " month", mktime(0, 0, 0, $mes, $dia, $ano)));
        }
        
//        print "<pre>";
//        print_r($vencimento);
//        die();

        return $vencimento;
    }

    function dataDiaMes($dataDiaMes) {
        $data = date('d/m', strtotime($dataDiaMes));
        $partes = explode("/", $data);
        $dia = $partes[0];
        $mes = $partes[1];
      //  $ano = $partes[2];
        
        $diames = $partes[0]."/".$partes[1];

        return $diames;
    }

}
