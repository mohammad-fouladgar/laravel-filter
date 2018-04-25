<?php

namespace Fouladgar\Filter\Foundation\Contracts;

abstract class FilterFactory
{
    /**
     *  decide which filter will instantiate.
     *
     * @param string $filterName
     *
     * @return Filter
     */
    abstract public static function factory(string $filterName): Filter;
}
