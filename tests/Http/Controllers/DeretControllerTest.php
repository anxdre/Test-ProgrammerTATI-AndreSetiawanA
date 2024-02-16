<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\DeretController;
use PHPUnit\Framework\TestCase;

class DeretControllerTest extends TestCase
{

    private $deretController;

    protected function setUp(): void
    {
        $this->deretController = new DeretController();
    }

    function getLastLine($string): array
    {
        return explode("\n", $string);
    }

    public function testHelloworld()
    {
        $result = $this->deretController->helloworld(6);
        echo $result;

        self::assertEquals("helloworld(6) => 1 2 3 hello world 6 ", $this->getLastLine($result)[5], 'result value : ' . $result);
    }
}
