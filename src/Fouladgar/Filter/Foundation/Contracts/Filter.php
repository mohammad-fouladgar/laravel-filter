<?php

namespace Fouladgar\Filter\Foundation\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface Filter
{
    /**
     * Apply the filter to a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed   $value
     *
     * @return Builder
     */
    public static function apply(Builder $builder, $value):Builder;
}
