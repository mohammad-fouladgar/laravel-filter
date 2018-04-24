<?php

namespace Fouladgar\Filter\Test\Unit;

use Fouladgar\Filter\Foundation\ConcreteFilterFactory;
use Fouladgar\Filter\Foundation\Contracts\Filter as IFilter;
use Fouladgar\Filter\Foundation\Contracts\FilterFactory;
use Fouladgar\Filter\Test\EntitiesFilters\UserFilters\SampleFilter;
use Fouladgar\Filter\Test\TestCase;
use Illuminate\Database\Eloquent\Builder;
use Mockery as m;

class FilterFactoryTest extends TestCase
{
    protected $builder;

    public function setUp()
    {
        parent::setUp();

        $this->builder = m::mock(Builder::class);
    }

    public function tearDown()
    {
        parent::tearDown();

        m::close();
    }

    /**
     * @test
     */
    public function itShouldBeInstanceOfInterfaceFilter()
    {
        $this->assertInstanceOf(IFilter::class, new SampleFilter());
    }

    /**
     * @test
     */
    public function testApplyMethod()
    {
        $this->assertInstanceOf(Builder::class, SampleFilter::apply($this->builder, []));
    }

    /**
     * @test
     */
    public function itShouldBeInstanceOfFilterFactory()
    {
        $this->assertInstanceOf(FilterFactory::class, new ConcreteFilterFactory());
    }

    /**
     * @test
     */
    public function testFactoryMethod()
    {
        $this->assertInstanceOf(IFilter::class, ConcreteFilterFactory::factory(SampleFilter::class));
    }

    /**
     * @test
     * @expectedException              \Fouladgar\Filter\Exceptions\NotFoundFilterException
     * @expectedExceptionMessage       Filter nout found.
     */
    public function testExceptionFactoryMethod()
    {
        $this->assertInstanceOf(IFilter::class, ConcreteFilterFactory::factory(InvalidFilter::class));
    }
}
