<?php

namespace Fouladgar\Filter\Test;

use Fouladgar\Filter\FilterServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

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
