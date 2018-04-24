<?php

namespace Fouladgar\Filter\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Fouladgar\Filter\FilterServiceProvider;

class TestCase extends BaseTestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FilterServiceProvider::class,
        ];
    }
}
