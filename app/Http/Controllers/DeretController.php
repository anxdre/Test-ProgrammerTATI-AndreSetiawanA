<?php

namespace App\Http\Controllers;

class DeretController extends Controller
{
    public function helloworld($n): string
    {
        $data = "";
        for ($i = 1; $i <= $n; $i++) {
            $data .= "helloworld($i) => ";

            for ($j = 1; $j <= $i; $j++) {
                if ($j % 4 == 0 && $j % 5 == 0) {
                    $data .= "helloworld ";
                } elseif ($j % 4 == 0) {
                    $data .= "hello ";
                } elseif ($j % 5 == 0) {
                    $data .= "world ";
                } else {
                    $data .= $j . " ";
                }
            }
            $data.="\n";
        }
        return $data;
    }
}
