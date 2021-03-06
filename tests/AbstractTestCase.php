<?php

namespace Christhompsontldr\Tests\LaravelInky;

use Christhompsontldr\LaravelInky\InkyServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return InkyServiceProvider::class;
    }
}