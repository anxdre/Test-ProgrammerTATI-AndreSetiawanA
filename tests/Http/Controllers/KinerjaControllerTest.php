<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\KinerjaController;
use PHPUnit\Framework\TestCase;

class KinerjaControllerTest extends TestCase
{
    private $kinerjaController;

    protected function setUp(): void
    {
        $this->kinerjaController = new KinerjaController();
    }

    public function testPredikat_kinerja()
    {

        $result = $this->kinerjaController->predikat_kinerja('diatas espektasi', 'diatas espektasi');
        echo('result value : ' . $result);
        self::assertEquals('sangat baik', $result, 'result value : ' . $result);
    }

    public function testPredikat_kinerjaCenterValue()
    {
        $result = $this->kinerjaController->predikat_kinerja('sesuai espektasi', 'sesuai espektasi');
        echo('result value : ' . $result);
        self::assertEquals('baik', $result, 'result value : ' . $result);
    }

    public function testPredikat_kinerjaBottomValue()
    {
        $result = $this->kinerjaController->predikat_kinerja('dibawah espektasi', 'dibawah espektasi');
        echo('result value : ' . $result);
        self::assertEquals('sangat kurang', $result, 'result value : ' . $result);
    }
}
