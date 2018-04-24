<?php

namespace Fouladgar\Filter\Foundation;

use  Fouladgar\Filter\Foundation\Contracts\FilterFactory;
use Fouladgar\Filter\Foundation\Contracts\Filter;
use Fouladgar\Filter\Exceptions\NotFoundFilterException;

class ConcreteFilterFactory extends FilterFactory
{
    /**
     *  decide which filter will instantiate.
     *
     * @param string $filterName
     *
     * @return Filter
     */
    public static function factory(string $filterName):Filter
    {
        return static::makeFilter($filterName);
    }

    /**
     * Make the filter taken.
     *
     * @param string $filterName
     *
     * @return Filter | NotFoundFilterException
     */
    private static function makeFilter(string $filterName):Filter
    {
        if (static::filterExists($filterName)) {
            return app($filterName);
        }

        throw new NotFoundFilterException('Filter nout found.');
    }

    /**
     * Check filter exists.
     *
     * @param string $filterClass
     *
     * @return boolean
     */
    protected static function filterExists(string $filterClass): bool
    {
        return class_exists($filterClass);
    }
}
