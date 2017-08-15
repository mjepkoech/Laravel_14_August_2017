<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected $baseUrl = 'http://localhost';
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function testBasicExample()
    {
        $data = [15, 10, 5, 20];
        $result = array_sum($data);
        $this->assertEquals(50, $result);
    }

}
