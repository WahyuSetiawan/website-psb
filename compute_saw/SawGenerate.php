<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SawGeneraet
 *
 * @author SiapaSaja
 */
class SawGenerate {

    //put your code here

    public $siswa;
    public $compute;

    function __construct($metadata, $bobot) {

        $siswanis = array_keys($metadata);
        $variable_keys = array_keys($bobot);

        // generate siswa for compute class

        for ($index = 0; $index < count($siswanis); $index++) {
            for ($index1 = 0; $index1 < count($variable_keys); $index1++) {
                if ($bobot[$variable_keys[$index1]]['dp'] == "Y") {
                    $nilai = $bobot[$variable_keys[$index1]]['subcriteria'][$metadata[$siswanis[$index]][$variable_keys[$index1]]]['nilai'];
                } else {
                    $nilai = $this->getMaxandMin($metadata[$siswanis[$index]][$variable_keys[$index1]], $bobot[$variable_keys[$index1]]['subcriteria']);
                }

                $this->siswa[$siswanis[$index]][$variable_keys[$index1]] = $nilai;
            }
        }
        
        $this->debug($this->siswa);

        // generate benefit and cost

        foreach ($variable_keys as $value) {
            if ($bobot[$value]['status'] == 'benefit') {
                $this->siswa = $this->benefit($this->siswa, $value);
            } else {
                $this->siswa = $this->cost($this->siswa, $value);
            }
        }

        // generate bobot minimal requiredment compute

        foreach ($variable_keys as $value) {
            $bobotcompute[$value] = $bobot[$value]['nilai'];
        }

        $this->compute = new SawCompute($this->siswa, $bobotcompute);
    }

    public function getMaxandMin($nilai, $range) {
        foreach ($range as $value) {

            if ($nilai >= $value['min'] && $nilai <= $value['max']) {
                echo $value['nilai'];
                return $value['nilai'];
            }
        }

        return 0;
    }

    public function bobot($bobot) {
        
    }

    public function benefit($siswa, $idnormalize) {
        $max = 0;
        $keys = array_keys($siswa);

        for ($index = 0; $index < count($keys); $index++) {
            if ($siswa[$keys[$index]][$idnormalize] >= $max) {
                $max = $siswa[$keys[$index]][$idnormalize];
            }
        }

        for ($index = 0; $index < count($keys); $index++) {
            $siswa[$keys[$index]][$idnormalize] = $siswa[$keys[$index]][$idnormalize] / $max;
        }

        return $siswa;
    }

    public function cost($siswa, $idnormalize) {
        $min = 0;
        $keys = array_keys($siswa);

        for ($index = 0; $index < count($keys); $index++) {
            if ($siswa[$keys[$index]][$idnormalize] <= $min) {
                $min = $siswa[$keys[$index]][$idnormalize];
            }
        }

        for ($index = 0; $index < count($keys); $index++) {
            $siswa[$keys[$index]][$idnormalize] = $min / $siswa[$keys[$index]][$idnormalize];
        }

        return $siswa;
    }

    public function debug($a) {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }

}
