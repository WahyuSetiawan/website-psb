<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SawCompute
 *
 * @author SiapaSaja
 */
class SawCompute {

    //put your code here

    public $bobot;
    public $variable;
    public $alternatif;
    public $return;

    function __construct($variable, $bobot) {
        $this->variable = $variable;
        $this->bobot = $bobot;

        $this->runCompute($this->variable, $this->bobot);
    }

    public function runCompute($variable, $bobot) {
        $this->alternatif = array_keys($variable);

        for ($index = 0; $index < count($this->alternatif); $index++) {
            $bobotkeys = array_keys($variable[$this->alternatif[$index]]);

            $sum = 0;
            for ($index1 = 0; $index1 < count($bobotkeys); $index1++) {
                $sum = $sum + ($variable[$this->alternatif[$index]][$bobotkeys[$index1]] * $bobot[$bobotkeys[$index1]]);
            }

            $this->return[$this->alternatif[$index]] = $sum;
        }
    }

    public function getMaxAlterantif() {
        $max["value"] = max($this->return);
        $max["id"] = array_search($max["value"], $this->return);
        return $max;
    }
    
    function getBobot() {
        return $this->bobot;
    }

    function getVariable() {
        return $this->variable;
    }

    function getAlternatif() {
        return $this->alternatif;
    }

    function getReturn() {
        return $this->return;
    }


}
