<?php

namespace Fouladgar\Filter\Foundation;

use Fouladgar\Filter\Exceptions\NotFoundFilterException;
use Fouladgar\Filter\Foundation\Contracts\Filter;
use Fouladgar\Filter\Foundation\Contracts\FilterFactory;

class ConcreteFilterFactory extends FilterFactory
{
    /**
     *  decide which filter will instantiate.
     *
     * @param string $filterName
     *
     * @return Filter
     */
    public static function factory(string $filterName): Filter
    {
        return static::makeFilter($filterName);
    }

    /**
     * Check filter exists.
     *
     * @param string $filterClass
     *
     * @return bool
     */
    protected static function filterExists(string $filterClass): bool
    {
        return class_exists($filterClass);
    }

    /**
     * Make the filter taken.
     *
     * @param string $filterName
     *
     * @return Filter | NotFoundFilterException
     */
    private static function makeFilter(string $filterName): Filter
    {
        if (static::filterExists($filterName)) {
            return app($filterName);
        }

        throw new NotFoundFilterException('Filter nout found.');
    }
}
