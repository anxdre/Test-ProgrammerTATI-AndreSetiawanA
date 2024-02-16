<?php

namespace App\Http\Controllers;

class KinerjaController extends Controller
{
    public function predikat_kinerja($hasil_kerja, $perilaku): string
    {
        $performance = array(
            array('sangat baik', 'baik', 'kurang/misconduct'),
            array('baik', 'baik', 'kurang/misconduct'),
            array('butuh perbaikan', 'butuh perbaikan', 'sangat kurang')
        );

        return $performance[$this->kinerjaToIdHelper($hasil_kerja)][$this->kinerjaToIdHelper($perilaku)];
    }

    public function kinerjaToIdHelper($data)
    {
        if ($data == 'diatas espektasi') {
            return 0;
        } elseif ($data == 'sesuai espektasi') {
            return 1;
        } else {
            return 2;
        }
    }
}
