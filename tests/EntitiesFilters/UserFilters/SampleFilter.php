<?php

 namespace Fouladgar\Filter\Test\EntitiesFilters\UserFilters;

use Fouladgar\Filter\Foundation\Contracts\Filter;
use Illuminate\Database\Eloquent\Builder;

class SampleFilter implements Filter
{
    /**
     * Apply the filter to a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed   $value
     *
     * @return Builder
     */
    public static function apply(Builder $builder, $value):Builder
    {
        return $builder;
    }
}
